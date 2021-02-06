// Text scramble Effect from https://codepen.io/soulwire/pen/mErPAK
class TextScramble {
    constructor(el) {
        this.el = el
        this.chars = '!<>-_\\/[]{}—=+*^?#________'
        this.update = this.update.bind(this)
    }
    setText(newText) {
        const oldText = this.el.innerText
        const length = Math.max(oldText.length, newText.length)
        const promise = new Promise((resolve) => this.resolve = resolve)
        this.queue = []
        for (let i = 0; i < length; i++) {
            const from = oldText[i] || ''
            const to = newText[i] || ''
            const start = Math.floor(Math.random() * 40)
            const end = start + Math.floor(Math.random() * 40)
            this.queue.push({ from, to, start, end })
        }
        cancelAnimationFrame(this.frameRequest)
        this.frame = 0
        this.update()
        return promise
    }
    update() {
        let output = ''
        let complete = 0
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i]
            if (this.frame >= end) {
                complete++
                output += to
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar()
                    this.queue[i].char = char
                }
                output += `<span class="dud">${char}</span>`
            } else {
                output += from
            }
        }
        this.el.innerHTML = output
        if (complete === this.queue.length) {
            this.resolve()
        } else {
            this.frameRequest = requestAnimationFrame(this.update)
            this.frame++
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)]
    }
}

// Set Geek quotes & timer

const phrases = [
    'Contemplez votre trépas mortels et tremblez!',
    'Je ne suis nulle part… Je suis partout. Je suis le spectateur invisible.',
    'Et le diable en moi danse avec ses démons et la sarabande est loin d\'être terminée.',
    'Par le feu, soyez purifié!',
    'Vous pouvez rire, il y a eu aussi des gens qui disaient que l’Énormus à Babille n’existait pas.',
    'La folie vous a fait venir ici devant moi, et je serai votre perte.',
    '*cri d\'agonie*',
    'Je suis le rêve éveillé, le monstre de vos cauchemars, le démon aux mille visages.',
    'Tu as raison de te méfier, c’est souvent infesté de Nargoles.',
    'Malheureusement, nous sommes tous humains. Sauf moi, bien sûr.'
]

const el = document.querySelector('.text')
const fx = new TextScramble(el)

let counter = 0
const next = () => {
    fx.setText(phrases[counter]).then(() => {
        setTimeout(next, 2500)
    })
    counter = (counter + 1) % phrases.length
}

next()
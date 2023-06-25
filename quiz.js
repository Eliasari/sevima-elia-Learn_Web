const quizData = [
    {
        question: "Bahasa pemrograman yang digunakan untuk membuat halaman web interaktif adalah",
        a: "Java",
        b: "C",
        c: "Python",
        d: "javascript",
        correct: "d",
    },
    {
        question: "Dalam pemrograman IDE merupakan singkatan dari",
        a: "Integrated Development Environment",
        b: "Intelligent Design Environment",
        c: "Integrated Deployment Environment",
        d: "Intelligent Debugging Environment",
        correct: "a",
    },
    {
        question: "Bahasa pemrograman yang dikembangkan oleh Google dan digunakan untuk pengembangan web adalah?",
        a: "Go",
        b: "Ruby",
        c: "Phyton",
        d: "Dart",
        correct: "d",
    },
    {
        question: "Dalam pemrograman OOP merupakan singkatan dari",
        a: "Object-Oriented Programming",
        b: "Operational Optimization Process",
        c: "Object-Oriented Protocol",
        d: "Order of Operations Paradigm",
        correct: "a",
    },
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>
           <button onclick="window.location.href = 'gamepage.php'">Reload</button>
           `
       }
    }
})
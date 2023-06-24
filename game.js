const quizData = [
    {
        question : "Apa yang dimaksud dengan debugging dalam pemrograman?",
        a: "Proses menguji program secara keseluruhan sebelum diluncurkan",
        b: "Proses mengoptimalkan performa program",
        c: "Proses merancang tampilan antarmuka program",
        d: "Proses merancang tampilan antarmuka program",
        correct: "Proses memperbaiki kesalahan atau bug dalam program",
    },
    {
        question : "Apa yang dimaksud dengan pemrograman komputer?",
        a: "Proses mencetak program komputer",
        b: "Aktivitas merancang, menulis, dan menguji program komputer",
        c: "Pengelolaan hardware komputer",
        d: "Proses memperbaiki kesalahan dalam program komputer",
        correct: "Aktivitas merancang, menulis, dan menguji program komputer",
    },

    {
        question : "Apa yang dimaksud dengan IDE (Integrated Development Environment)",
        a: "Sebuah bahasa pemrograman populer",
        b: "Sebuah platform untuk menjalankan program komputer",
        c: "Sebuah alat untuk memperbaiki kesalahan dalam program",
        d: "Sebuah lingkungan pengembangan yang terintegrasi dengan berbagai alat untuk menulis, menguji, dan memecahkan masalah dalam program",
        correct: "Sebuah lingkungan pengembangan yang terintegrasi dengan berbagai alat untuk menulis, menguji, dan memecahkan masalah dalam program",
    },
    {
        question: "Apa yang dimaksud dengan algoritma dalam pemrograman?",
        a: "Urutan instruksi yang digunakan untuk menguji program",
        b: "Sekumpulan perintah yang digunakan untuk menulis program",
        c: "Proses mengubah kode sumber program menjadi bahasa mesin",
        d: "Langkah-langkah logis untuk menyelesaikan suatu masalah dalam program",
        correct: "Langkah-langkah logis untuk menyelesaikan suatu masalah dalam program",
    },
    {
        question: "Bahasa pemrograman adalah?",
        a: "Bahasa yang digunakan oleh manusia untuk berkomunikasi dengan komputer",
        b: "Bahasa yang digunakan oleh komputer untuk berkomunikasi dengan manusia",
        c: "Bahasa yang digunakan oleh programmer untuk membuat program komputer",
        d: "Bahasa yang digunakan oleh jaringan komputer untuk berkomunikasi antara satu dengan yang lain",
        correct: "Bahasa yang digunakan oleh programmer untuk membuat program komputer",
    }
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
           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})
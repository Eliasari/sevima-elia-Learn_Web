'use strict'

//inisialisasi
const express = require("express")

//implementasi
const app = express()
app.use(express.json())

app.use(express.urlencoded({
    extended: true
}))

//menghubungkan ke database
const db = require('./db')
db.connect(error => {
    if (error) throw error
    console.log("mysql connect")
})

//endpoint 
app.use("/people", require('../Server/routes/people'))

//run server
const port = 8000;
app.listen(port, () => {
    console.log(`Server di port ${port}`)
})

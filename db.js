'use strict'

const mysql = require('mysql');

//koneksi
const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "toko_atk2",
})

module.exports = db;
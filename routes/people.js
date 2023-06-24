'use strict'

const express = require("express")
const userController = require('../controller/people.controller')
const router = new express.Router()

router.get('/getPeople', userController.index)
router.get('getIPeople/:id', userController.getId)
router.post('/addPeople', userController.tambah)
router.delete('/dropPeople/:idUser', userController.hapus)
router.put('/updatePeople/:idUser', userController.ubah)

module.exports = router










//import library
const express = require('express');
const bodyParser = require('body-parser');
const md5 = require('md5');

//implementasi library
const app = express();
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));

//import model
const model = require('../models/index');
const people = model.people

//endpoint menampilkan semua data admin, method: GET, function: findAll()
app.get("/", (req,res) => {
    profile.findAll()
        .then(result => {
            res.json({
                profile : result
            })
        })
        .catch(error => {
            res.json({
                message: error.message
            })
        })
})

//endpoint untuk menyimpan data admin, METHOD: POST, function: create
app.post("/", (req,res) => {
    let data = {
        name : req.body.name,
        username : req.body.username,
        password : md5(req.body.password)
    }

    people.create(data)
        .then(result => {
            res.json({
                message: "data has been inserted"
            })
        })
        .catch(error => {
            res.json({
                message: error.message
            })
        })
})

//endpoint mengupdate data admin, METHOD: PUT, function:update
app.put("/:id", (req,res) => {
    let param = {
        people_id : req.params.id
    }
    let data = {
        name : req.body.name,
        username : req.body.username,
        password : md5(req.body.password)
    }
    people.update(data, {where: param})
        .then(result => {
            res.json({
                message: "data has been updated"
            })
        })
        .catch(error => {
            res.json({
                message: error.message
            })
        })
})

//endpoint menghapus data admin, METHOD: DELETE, function: destroy
app.delete("/:id", (req,res) => {
    let param = {
        people_id : req.params.id
    }
    people.destroy({where: param})
        .then(result => {
            res.json({
                message: "data has been deleted"
            })
        })
        .catch(error => {
            res.json({
                message: error.message
            })
        })
})

module.exports = app




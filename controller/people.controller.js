'use strict'

const db = require('../db')

module.exports = {
    index: (req, res) => {
        const sql = 'select * from people'

        db.query(sql, (error, results) => {
            if (error) throw (error)
            res.json({
                message: "berhasil menampilkan data",
                results: results
            })
        })
    },
    getId: (req, res) => {
        const id = req.params.id;
        db.query(`select * from people where idPeople = '${id}'`, (err, results) => {
            if (err) throw err;
            res.json({
                message: "Berhasil Menampilkan Data",
                data: results,
            });
        });
    },
    tambah: (req, res) => {

        let namaPeople = req.body.namaPeople
        let alamatPeople = req.body.alamatPeople

        if (!namaPeople,!alamatPeople) {
            res.status(402).json({
                message: 'Data harus diisi!'
            })
        } else {
            return db.query(`INSERT INTO people SET?`, { namaPeople, alamatPeople }, (error, results) => {
                if (error) throw (error)
                res.json({
                    message: "berhasil menambahkan data",
                    namaPeople: namaPeople,
                    alamatPeople: alamatPeople,
                })
            })
        }
    },
    hapus: (req, res) => {
        const idPeople = req.params.idPeople

        db.query(`DELETE FROM people WHERE idPeople = ?`, idPeople, (error, results) => {
            if (error) throw (error)
            res.json({
                message: "berhasil menghapus data",
                results: results
            })
        })
    },
    ubah: (req, res) => {
        const idPeople = req.params.idPeople
        const { namaPeople, alamatPeople } = req.body

        db.query(`UPDATE people SET ? WHERE idPeople = '${idPeople}'`, { namaPeople, alamatPeople }, (error, results) => {
            if (error) throw (error)
            res.json({
                message: "berhasil update data",
                results: results
            })
        })
    },
}
//framework
const express = require ("express")
const mysql = require ("mysql")
//pendefinisian express sebagai fungsi, guna app untuk membuat sebuah route
const BodyParser = require("body-parser")
//standard input buat metode unput post

const app = express()

app.use(BodyParser.urlencoded({extended: true}));

//konfigurasi koneksi sql
//set view engine sebagai ejs dan memberitahu dimana direktori berada
app.set("view engine", "ejs")
app.set("views","views")

const db = mysql.createConnection({
    host : "localhost",
    database : "school",
    user : "root",
    password : "",
})
//koneksi ke xampp, err merupakan callback, 
//console log merupakan sebuah function untuk menmastikan apakah sebuah code yang telah kita buat itu berjalan atau tidak dengan cara memunculkan output ke terminal
//console log memiliki format console.log("tulisan yang diinginkan")
db.connect ((err) => {
    if (err) throw err

    
    // untuk get data
    app.get("/", (req, res) => {
        const sql = "SELECT * FROM user"
        db.query(sql, (err, result) =>{
            const users = JSON.parse(JSON.stringify(result)) 
        res.render("index", { users: users, title :"Repostitory Mahasiswa" })
    })

    //untuk hapus data
    //app.post("/hapus", (req,res)=>{
       // const sql = `DELETE FROM user WHERE id=?`
       // const id = 8
        //db.run(sql, [id], (err) =>{
           // if (err) throw err
            //res.redirect("/");  
      //  })
   // })
            // untuk insert data
            app.post("/tambah", (req, res) => {
                const insertSql = `INSERT INTO user (nama, kelas) VALUES ('${req.body.nama}', '${req.body.kelas}');`
                db.query(insertSql, (err, result) => {
                    if (err) throw err
                    res.redirect("/");
    
                }) 
            })

            

    
        



    })  



})



app.listen(8000, () => {
    console.log("server ready...")
})
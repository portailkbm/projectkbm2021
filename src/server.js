

// importing the dependencies
const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const helmet = require('helmet');
const morgan = require('morgan');
const path = require('path')
const mysql = require('mysql2')
const MD5 = require('crypto-js/md5')
const { Sequelize } = require('sequelize');


var connection = mysql.createConnection({
  host     : 'localhost', //                91.216.107.183        92.243.16.99
  user     : 'root', //                    demen1587164      c16_react
  password : '', //                        5t4fllyba3      euvMyMC4@4
  database : 'demen1587164' //                           c16_react
})

// defining the Express app
const app = express();

// defining an array to work as the database (temporary solution)
const ads = [
  {title: 'Hello, world (again)!'}
];

// adding Helmet to enhance your API's security
//app.use(helmet());

// using bodyParser to parse JSON bodies into JS objects
app.use(bodyParser.json());

// enabling CORS for all requests
app.use(cors());

// adding morgan to log HTTP requests
app.use(morgan('combined'));

app.get('/test', function(req, res) {
    res.send(__dirname)
})


const sequelize = new Sequelize("demen1587164", "demen1587164", "5t4fllyba3", {
  dialect: "mysql",
  host: "91.216.107.183 "
 });

app.get('/api/Evenemment', function(req, res) {   
  connection.query("select evenement.*, ville.nomville from evenement, ville where evenement.cp = ville.cp order by evenement.debutevent", function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results);
    res.send(results);
  })
  //connection.end()
})

app.get('/api/Evenemment/:id', function(req, res) {  
  const id = req.params.id 
  connection.query("select evenement.*, ville.nomville from evenement, ville where evenement.idevent ="+id+" and evenement.cp = ville.cp order by evenement.debutevent", function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results);
    res.send(results);
  })
  //connection.end()
})

app.delete('/api/Evenemment/:id', function(req, res) {  
  const id = req.params.id 
  connection.query("DELETE FROM `evenement` WHERE evenement.idevent ="+id+"", function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results);
    res.send(results);
  })
  //connection.end()
})

app.post('/api/Evenemment', function(req, res) {  
  const libevent = req.body.libevent
  const desevent = req.body.desevent
  const photoevent = req.body.photoevent
  const flyer = req.body.flyer
  const debutevent = req.body.debutevent
  const debutevent_hr = req.body.debutevent_hr
  const finevent = req.body.finevent
  const finevent_hr = req.body.finevent_hr
  const cp = req.body.cp
  console.log(body)
  connection.query("INSERT INTO `evenement`(`libevent`, `desevent`, `photoevent`, `flyer`, `debutevent`, `debutevent_hr`, `finevent`, `finevent_hr`, `cp`) VALUES ("+libevent+","+desevent+","+photoevent+","+flyer+","+debutevent+","+debutevent_hr+","+finevent+","+finevent_hr+","+cp+")", function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results);
    res.send(results);
  })
  //connection.end()
})


app.get('/api/Ville', function(req, res) {   
  connection.query("SELECT * FROM `ville`", function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results);
    res.send(results);
  })
  //connection.end()
})





/* app.get('/api/resume/outages/:lvl/:cus', function(req, res) {   
  const lvl = req.params.lvl
  const cus = req.params.cus
  connection.query("SELECT COUNT(id_reporter) AS `outages` FROM `REPORTERS`AS r, `ZONES_CUSTOMERS` AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE r.`type` = 1 AND r.`status_gestrav` = 0 AND z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= "+cus+" AND z.`level` = 8 AND r.`cancel` = 0 AND cu.`date` <= r.`date` AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) AND  r.`id_reporter` NOT IN (SELECT ir.`id_reporter` FROM `INTERVENTIONS_REPORTERS` AS ir)", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results[0])
  })
}) */
/* app.get('/api/resume/reports/:lvl/:cus', function(req, res) {  
  const lvl = req.params.lvl
  const cus = req.params.cus 
  connection.query("SELECT COUNT(*) as `new_reports` FROM `REPORTERS` AS r, `ZONES_CUSTOMERS` AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= "+cus+" AND z.`level` = 8 AND r.`cancel` = 0 AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) AND TIMEDIFF('2021-10-15 20:35:33', r.`date`) < '48:00'", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results[0])
  })
})
app.get('/api/resume/piechart/:lvl/:cus', function(req, res) {  
  const lvl = req.params.lvl
  const cus = req.params.cus 
  connection.query("SELECT z.`name` as area, COUNT(z.`name`) as units FROM `REPORTERS`AS r, `ZONES_CUSTOMERS`AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= "+cus+" AND z.`level` = 8 AND r.`status` != 0 AND cu.`date` <= r.`date` AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) GROUP BY z.`name`", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})
app.get('/api/resume/line/:lvl/:cus', function(req, res) {   
  const lvl = req.params.lvl
  const cus = req.params.cus
  connection.query("SELECT DATE_FORMAT(CONVERT_TZ(r.`date`,'+00:00','-04:00'), '%Y-%m-%d' ) as day, COUNT(*) as units FROM `REPORTERS`AS r, `ZONES_CUSTOMERS`AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= "+cus+" AND z.`level` = 8 AND r.`status` != 0 AND cu.`date` <= r.`date` AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) GROUP BY day", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})
app.get('/api/resume/tab/:lvl/:cus', function(req, res) {  
  const lvl = req.params.lvl
  const cus = req.params.cus 
  connection.query("SELECT r.*, z.`name` as area FROM `REPORTERS`AS r INNER JOIN `ZONES`AS z ON ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) AND z.`level` = 8 INNER JOIN `ZONES_CUSTOMERS` AS zc ON z.`id_zone` = zc.`id_zone` AND zc.`email` != '' INNER JOIN `CUSTOMERS` AS cu ON cu.`date` <= r.`date` AND cu.`id_customer`= "+cus+" AND zc.`id_customer` = cu.`id_customer` WHERE r.`cancel` = 0 ORDER BY r.`date` DESC LIMIT 0, 15", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})

app.get('/api/resume/feed/:cus', function(req, res) {  
  const cus = req.params.cus
  connection.query("SELECT ic.*, u.`firstname`, u.`lastname`, i.`id_customer`, i.`created` FROM `USERS` AS u, `INTERVENTIONS_COMMENTS` AS ic, `INTERVENTIONS` AS i WHERE ic.`id_user` = u.`id_user` AND ic.`id_intervention` = i.`id_intervention` AND i.`id_customer`= "+cus+" ORDER BY date DESC LIMIT 0,3", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})


app.get('/api/connexion/:lvl/:cus', function(req, res) { 
  const lvl = req.params.lvl
  const cus = req.params.cus
  connection.query("SELECT m.* FROM `MENUS`AS m, `MENUS_CUSTOMERS` AS mc, `CUSTOMERS` AS cu WHERE cu.`id_customer`="+cus+" AND m.`level` <="+lvl+" AND m.`id_menu` = mc.`id_menu` AND cu.`id_customer` = mc.`id_customer` AND cu.`status` = 1 AND m.`status` = 1 ORDER BY m.`order_menu` ASC;", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
}) /* SELECT u.*, l.title FROM `USERS` AS u,`LEVELS` AS l WHERE u.email = '"+login+"' AND u.level = l.id_level 
app.get('/api/connexion/user/:login/:password', function(req, res) { 
  const login = req.params.login
  const password = req.params.password
  connection.query("SELECT u.*, l.title FROM `USERS` AS u,`LEVELS` AS l WHERE u.email = '"+login+"' AND u.level = l.id_level", function (error, results, fields) {
    if (error) throw error
    const crypt = MD5(password).toString(
    )
    try {
      if(crypt === results[0].password){
        console.log(results[0])
        res.send(results[0])
      }else{
        res.send(error)
      }
    } catch (error) {
      res.send(error)
    }
  })
})

app.get('/api/resume/map/:type/:cus', function(req, res) {  
  const type = req.params.type
  const cus = req.params.cus 
  connection.query("SELECT DISTINCT r.*, z.`name` as area FROM `REPORTERS`AS r, `ZONES_CUSTOMERS`AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE r.`type` ="+type+" AND z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`="+cus+" AND z.`level` = 8 AND r.`cancel` = 0 AND cu.`date` <= r.`date` AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) ORDER BY date DESC", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})

app.get('/api/resume/intervention/:cus', function(req, res) {  
  const cus = req.params.cus 
  connection.query("SELECT DISTINCT i.`id_intervention`, i.*, ile.`title` as titleLevel, ile.`color`, ist.`title` as titleStatus FROM `CUSTOMERS` AS cu, `INTERVENTIONS_LEVELS` AS ile, `INTERVENTIONS_STATUS` AS ist, `REPORTERS` AS r, `INTERVENTIONS` AS i, `INTERVENTIONS_REPORTERS` AS ir WHERE cu.`id_customer`= "+cus+" AND cu.`id_customer`= i.`id_customer` AND ile.`id_intervention_levels` = i.`level` AND ist.`id_intervention_status` = i.`status` AND ((r.`id_reporter` = ir.`id_reporter` AND ir.`id_intervention` = i.`id_intervention`) OR (r.`id_reporter` != ir.`id_reporter` AND ir.`id_intervention` != i.`id_intervention`)) ORDER BY created DESC", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})

app.get('/api/resume/notifications/:cus', function(req, res) {  
  const cus = req.params.cus 
  connection.query("SELECT n.* FROM `NOTIFICATIONS`AS n, `CUSTOMERS` AS c WHERE c.`id_customer` = "+cus+" AND c.`id_customer` = n.`id_customer` AND c.`status` = 1 AND n.`status` = 1 ORDER BY `created` DESC", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})

app.get('/api/resume/management/team/:cus', function(req, res) {  
  const cus = req.params.cus 
  connection.query("SELECT t.*, cu.`name` FROM `TEAMS`AS t, `CUSTOMERS` AS cu WHERE cu.`id_customer`= "+cus+" AND cu.`status` = 1 AND t.`id_customer` = cu.`id_customer` ORDER BY t.`title` DESC ", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})

app.get('/api/resume/management/user/:lvl/:cus', function(req, res) { 
  const lvl = req.params.lvl 
  const cus = req.params.cus 
  connection.query("SELECT u.*, l.`title` as titleLevel, c.`name` as `countryTitle` FROM `USERS`AS u, `LEVELS`AS l,`CUSTOMERS` AS cu, `COUNTRIES` AS c WHERE cu.`id_customer`= "+cus+" AND cu.`status` = 1 AND u.`level` = l.`id_level` AND u.`id_customer` = cu.`id_customer` AND u.`country` = c.`iso3` AND u.`level` <= "+lvl+" ORDER BY u.`date_create` DESC ", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})

app.get('/api/resume/management/activite/:idUser', function(req, res) {  
  const idUser = req.params.idUser 
  connection.query("SELECT DISTINCT ic.*, i.`id_customer`, u.`firstname`, u.`lastname`, i.`created` FROM `INTERVENTIONS_COMMENTS`AS ic, `INTERVENTIONS_REPORTERS` AS ir, `INTERVENTIONS` AS i, `USERS` AS u WHERE ic.`id_intervention` = ir.`id_intervention` AND ic.`id_user` = u.`id_user` AND u.`id_user` = "+idUser+" AND i.`id_intervention` = ir.`id_intervention` ORDER BY date DESC ", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results)
  })
})
app.get('/api/resume/:lvl/:cus', function(req, res) {  
  const cus = req.params.cus 
  connection.query("SELECT COUNT(id_reporter) AS `leaks` FROM `REPORTERS`AS r, `ZONES_CUSTOMERS`AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE r.`type` = 0 AND r.`status_gestrav` = 0 AND z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= "+cus+" AND z.`level` = 8 AND r.`cancel` = 0 AND cu.`date` <= r.`date` AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) AND  r.`id_reporter` NOT IN (SELECT ir.`id_reporter` FROM `INTERVENTIONS_REPORTERS` AS ir)", function (error, results, fields) {
    if (error) throw error
    console.log('The solution is: ', results)
    res.send(results[0])
  })
})
 */

    /*  SELECT t.*, cu.`name` FROM `TEAMS`AS t, `CUSTOMERS` AS cu WHERE cu.`id_customer`= 8 AND cu.`status` = 1 AND t.`id_customer` = cu.`id_customer` ORDER BY t.`title` DESC */
 
 /* SELECT u.*, l.`title` as titleLevel, c.`name` as `countryTitle` FROM `USERS`AS u, `LEVELS`AS l,`CUSTOMERS` AS cu, `COUNTRIES` AS c WHERE cu.`id_customer`= 8 AND cu.`status` = 1 AND u.`level` = l.`id_level` AND u.`id_customer` = cu.`id_customer` AND u.`country` = c.`iso3` AND u.`level` <= 13 ORDER BY u.`date_create` DESC */
 
 /* SELECT DISTINCT ic.*, i.`id_customer`, u.`firstname`, u.`lastname`, i.`created` FROM `INTERVENTIONS_COMMENTS`AS ic, `INTERVENTIONS_REPORTERS` AS ir, `INTERVENTIONS` AS i, `USERS` AS u WHERE ic.`id_intervention` = ir.`id_intervention` AND ic.`id_user` = u.`id_user` AND u.`id_user` = 2 AND i.`id_intervention` = ir.`id_intervention` ORDER BY date DESC */
/* 

SELECT DISTINCT r.*, z.`name` as area FROM `REPORTERS`AS r, `ZONES_CUSTOMERS`AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE r.`type` = 0 AND z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= 8 AND z.`level` = 8 AND r.`cancel` = 0 AND cu.`date` <= r.`date` AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) ORDER BY date DESC
 // requete avec la date du dernier rapport de la bbd test
SELECT COUNT(*) as `new_reports` FROM `REPORTERS` AS r, `ZONES_CUSTOMERS` AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= 8 AND z.`level` = 8 AND r.`cancel` = 0 AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) AND TIMEDIFF('2021-10-15 20:35:33', r.`date`) < "48:00"

// requete avec la date du jour mysql
SELECT COUNT(*) as `new_reports` FROM `REPORTERS` AS r, `ZONES_CUSTOMERS` AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= 8 AND z.`level` = 8 AND r.`cancel` = 0 AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) AND TIMEDIFF(CURTIME(), r.`date`) < '48:00'


resume statistic
stats 1  piechats 2 line 
data' dernier



getevents welbcall a chercher 
recupère la liste des lien des calendriers de la zonne du client 
il les lis 

// maap coupures 1 fuites 0 avec la variable statut 
SELECT DISTINCT r.*, z.`name` as area
                    FROM `REPORTERS`AS r, `ZONES_CUSTOMERS`AS zc,`CUSTOMERS` AS cu, `ZONES` AS z, `INTERVENTIONS` AS i, `INTERVENTIONS_REPORTERS` AS ir
                    WHERE r.`id_reporter` IN (SELECT ir.`id_reporter` FROM `INTERVENTIONS_REPORTERS` AS ir)
                    AND i.id_intervention = ir.id_intervention
                    AND r.`id_reporter` = ir.`id_reporter`
                    AND i.`status` = ".$state."
                    AND z.`id_zone` = zc.`id_zone`
                    AND (zc.`status` = 1 OR zc.`status` = 0)
                    AND zc.`email` != ''
                    AND zc.`id_customer` = cu.`id_customer`
                    AND cu.`id_customer`= $idCustomer
                    AND z.`level` = 8
                    AND cu.`date` <= r.`date`
                    ".$t."
                    AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude))
                    ORDER BY date DESC;

//map
SELECT DISTINCT r.*, z.`name` as area FROM `REPORTERS`AS r, `ZONES_CUSTOMERS`AS zc,`CUSTOMERS` AS cu, `ZONES` AS z WHERE z.`id_zone` = zc.`id_zone` AND (zc.`status` = 1 OR zc.`status` = 0) AND zc.`email` != '' AND zc.`id_customer` = cu.`id_customer` AND cu.`id_customer`= 8 AND z.`level` = 8 AND cu.`date` <= r.`date` AND r.`cancel` = 0 AND r.`type` = 1 AND ST_Contains(z.`multipolygon`, Point(r.longitude, r.latitude)) ORDER BY date DESC

SELECT ic.*, u.`firstname`, u.`lastname`, i.`id_customer`, i.`created` FROM `USERS` AS u, `INTERVENTIONS_COMMENTS` AS ic, `INTERVENTIONS` AS i WHERE ic.`id_user` = u.`id_user` AND ic.`id_intervention` = i.`id_intervention` AND i.`id_customer`= 8 ORDER BY date DESC LIMIT 0,3



SELECT DISTINCT i.`id_intervention`, i.*, ile.`title` as titleLevel, ile.`color`, ist.`title` as titleStatus FROM `INTERVENTIONS_REPORTERS` AS ir INNER JOIN `REPORTERS`AS r ON r.`id_reporter` = ir.`id_reporter` RIGHT JOIN `INTERVENTIONS` AS i ON ir.`id_intervention` = i.`id_intervention` INNER JOIN `INTERVENTIONS_LEVELS` AS ile ON ile.`id_intervention_levels` = i.`level` INNER JOIN `INTERVENTIONS_STATUS` AS ist ON ist.`id_intervention_status` = i.`status` INNER JOIN `CUSTOMERS` AS cu ON cu.`id_customer`= i.`id_customer` AND cu.`id_customer`= 8 WHERE i.`id_intervention` = 1 ORDER BY i.`created` DESC
*/



app.use(express.static(path.join(__dirname,'../client/build')))
app.all('/*', (req, res) => {
  res.status(200).sendFile(path.join(__dirname,'../client/build','index.html'))
});

/* app.use(express.static(path.join(__dirname,'../client/build')))
app.all('/*', (req, res) => {
  res.status(200).sendFile(path.join(__dirname,'../client/build','index.html'))
}); */

// starting the server
app.listen(4002, () => {
  console.log('listening on port 4002');
});
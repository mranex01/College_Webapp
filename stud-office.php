<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php require("css-files.php"); ?>
<style>



#side-nav{
  
}

#side-nav button{
  border:none;
  background-color:yellow;
  width:110px;
  padding: 8px;
  border-radius:5px;
  margin-bottom:2px;
  outline:none;
  
}
#side-nav button:hover{
 
  position:fixed;
  left:0; 
  
}
 #scholarship-btn{
  position:fixed;
  top:10%;
  left:-6%;
 }
 #fees-btn{
  position:fixed;
  top:16%;
  left:-6%;
 }
 #bus-btn{
  position:fixed;
  top:22%;
  left:-6%;
 }

@media only screen and (max-width: 600px) {
  
#scholarship-btn{
  position:fixed;
  
  left:-6%;
 }
 #fees-btn{
  position:fixed;
  top:14%;
  left:-6%;
 }
 #bus-btn{
  position:fixed;
  top:18%;
  left:-6%;
 }
}


table, td, th{
  padding:10px;
  border: 3px solid white;
   
  transition:0.8s;
}
th{
  color:yellow;
}
table:hover{

  background-color:gray;
  color:white;
}

h1{
  text-align:center;
}
#scholarship{
  margin-top:73px;
  padding:20px;
  background: url("assets/img/scholarship.jpg");
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;
  color:yellow;
 
}

#bus{
  margin:20px 20px;
  padding:20px;
  background: url("assets/img/bus.jpg");
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;
}
#fees{
  margin:20px 20px;
  padding:20px;
  background: url("assets/img/fees.jpg");
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;
}
</style>

</head>
<body>
<?php $title = "YCP - Office"; ?>

<?php require("header.php"); ?>

<div id="side-nav">
<a href="#scholarship-sec"><button style="background:blue;" id="scholarship-btn">Scholarship</button></a> 
<a href="#fees"><button style="background:green;" id="fees-btn">Fees</button></a> 
<a href="#bus"><button style="background:orange;"id="bus-btn">Bus</button></a>
</div>
 
<div id="scholarship-sec"></div>
<div id="scholarship">
<h1>Scholarship</h1>
<br/><br/>
<h5>VARIOUS GOVERNMENT SCHOLARSHIP SCHEME:</h5>
<br/>
<table align="center">
  <tr><th>Sr.No.</th><th>SCholarship<th>Catagory<th>Fee Concession.</th></tr>
  <tr><td>01</td><td>Samaj Kalyan Scholarship<td>SC/ST<td>100% Tuition Fee & Development Fee Concession</td></tr>
  <tr><td>02</td><td>Samaj Kalyan Scholarship<td>VJ/DT/NT/SBC<td>	100% Tuition Fee Concession</td></tr>
  <tr><td>03<td>Tuition Fee Weavers Scheme (TFWS) For Merit student</td><td>OPEN/OBC<td>100% Tuition Fee Concession</th></tr>  
  <tr><td>04<td>Samaj Kalyan Scholarship</td><td>OBC<td> 50% Tuition Fee Concession</td></tr>  
  <tr><td>05<td>	Economically Backward Category (EBC)</td><td>OPEN<td> 50% Tuition Fee Concession</td></tr>
  <tr><td>06<td>	Minority Scholarship Scheme</td><td>Jain, Muslim, Cristian, Parsi, Buddha<td> As per merit scheme Rs.25000/- (Per Year)</td></tr>  
</table>
<br/><br/>
<h5>VARIOUS SCHOLARSHIP SCHEME FROM DKTE SOCIETY:</h5>
<br/>
<table align="center">
  <tr><th>Sr.No.</th><th>SCholarship<th>Catagory<th>Fee Concession.</th></tr>
  <tr><td>01</td><td>Sahakar Maharshi Hon. Kallappanna Awade Scholarship<td>OPEN/OBC<td>	• For 90% above Rs.11000/- Fee Concession. (Per Year) excluding TFWS.
<br/>• For 85% to 90% Rs.5500/- Fee Concession. (Per Year) excluding TFWS.</td></tr>
  <tr><td>02</td><td>Admission from Under DKTE Society Schools<td>OPEN/OBC<td>10% Fee concession in Tuition Fee.</td></tr>
  </table>

  <br/><br/>
<h5>YOUR SCHOLARSHIP DETAILS:</h5>
<br/>
  <table align="center">
    <tr> <th>Scholership</th> <td></td> </tr>
    <tr> <th>Year</th> <td></td> </tr>
    <tr> <th>Status</th> <td></td> </tr>
    <tr> <th>Concession on fees</th> <td></td> </tr>
    <tr> <th>Total Fees</th> <td></td> </tr>

  
  </table>
</div>
<div id="fees">
<h1>Fees</h1>
<br/><br/>
<h5>Fee Approved by Fees Regulating Authority, Maharashtra for Academic Year 2020-21
</h5>
<br/>
<table align="center">
  <tr><th>Inst ID</th><th>Inst Name<th>Status<th>Date of Meeting</th><th>Tuition Fee</th><th>	Development Fee</th><th>	Total Fee</th></tr>
  <tr><th>PL6800</th><th>	D.K.T.E. SOCIETY'S YASHWANTRAO CHAVAN POLYTECHNIC, ICHALKARANJI.	Kolhapur</th><th>	Approved</th><th>	23-12-2019</th><th>	41629</th><th>	4371</th><th>	46000</th></tr>
   </table>

   <br/><br/>
<h5>YOUR FEES DETAILS:</h5>
<br/>
  <table align="center">
    <tr> <th>Total Fees</th> <td></td> </tr>
    <tr> <th>Paid Fees</th> <td></td> </tr>
    <tr> <th>Pending</th> <td></td> </tr> 
  </table>

  <h5>College Fee Structure</h5>
                                 <br/>              
                  
         
          <table align="center"> 
            <tr> 
             <th>Sr.No.</th> 
             <th> Year</th> 
             <th>Tution Fee</th> 
             <th>Development Fee</th> 
            </tr> 
            <tr> 
             <td>01</td> 
             <td>First Year</td> 
             <td>43,036/-</td> 
             <td>4304/-</td> 
            </tr> 
            <tr> 
             <td>02</td> 
             <td>Second Year</td> 
             <td> 46,479/-</td> 
             <td>4648/-</td> 
            </tr> 
            <tr> 
             <td>03</td> 
             <td>Third Year</td> 
             <td>46,479/-</td> 
             <td>4648/-</td> 
            </tr> 
          
          </table>


</div>
 


<div id="bus">
<h1>Bus</h1>

                    <h5>Transportation</h5><br>   
                    <table align="center">
		   
                
                <table>
                <tr><td><strong>Name</strong></td><td>Mr. A.A.Akivate</td></tr>
                <tr><td><strong> Designation </strong></td><td>BUS IN-CHARGE</td></tr>
                <tr><td><strong> Contact No.</strong></td><td>9916070992.</td></tr>
                </table>
               
            
           
            <br>
            <br>
                     <h5>Bus Service</h5> 
          <br> 
          <table align="center"> 
         
            <tr> 
             <th class="th">GHALAWAD</th> 
             <th class="th"> SANGAVADE</th> 
             <th class="th"> ICHALKARANJI LOCAL</th> 
             <th class="th"> MANAGAON</th> 
             <th class=" th">KAGAL-KARANUR</th> 
             <th class=" th">KUMBHOJ</th> 
             <th class=" th">RUI</th> 
            </tr> 
            <tr> 
             <td class="white-box">KUTWAD</td> 
             <td class="white-box">PATTANKODOLI</td> 
             <td class="white-box">YCP </td> 
             <td class="white-box">RUKADI</td> 
             <td class="white-box">KARNOOR</td> 
             <td class="white-box">THORAT CHOWK</td> 
             <td class="white-box">RAJWADA</td> 
            </tr> 
            <tr> 
             <td class="gray-box">KANAWAD</td> 
             <td class="gray-box">INGLI</td> 
             <td class="gray-box">RAJWADA</td> 
             <td class="gray-box">MANGAON</td> 
             <td class="gray-box">KAGAL</td> 
             <td class="gray-box">VIKRAM NAGAR</td> 
             <td class="gray-box">CHANDANI CHOWK</td> 
            </tr> 
            <tr> 
             <td class="white-box">SHIRATI</td> 
             <td class="white-box">RUI</td> 
             <td class="white-box">CHANDANI CHOWK</td> 
             <td class="white-box">SAJANI</td> 
             <td class="white-box">MOUJE SANGAON</td> 
             <td class="white-box">SHAHPUR</td> 
             <td class="white-box">TIN BASTI</td> 
            </tr> 
            <tr> 
             <td class="gray-box">HASUR</td> 
             <td class="gray-box">CHANDUR GAON</td> 
             <td class="gray-box">AWADE TALKIES</td> 
             <td class="gray-box">TILAVANI</td> 
             <td class="gray-box">KASABA SANGAON</td> 
             <td class="gray-box">J.K. NAGAR</td> 
             <td class="gray-box">SAMBHAJI CHOWK</td> 
            </tr> 
            <tr> 
             <td class="white-box">SHIROL</td> 
             <td class="white-box">ABHAR PHATA</td> 
             <td class="white-box">SAMBHAJI CHOWK</td> 
             <td class="white-box">RUIPHATA</td> 
             <td class="white-box">YALGUD</td> 
             <td class="white-box">KOROCHI</td> 
             <td class="white-box">DATTANAGAR</td> 
            </tr> 
            <tr> 
             <td class="gray-box">DHARANGUTTI</td> 
             <td class="gray-box">SHAHUNAGAR</td> 
             <td class="gray-box">SHATKON CHOWK</td> 
             <td class="gray-box">RUI DATTA MANDIR</td> 
             <td class="gray-box">RENDAL</td> 
             <td class="gray-box">HATKANAGALE</td> 
             <td class="gray-box">KABNOOR</td> 
            </tr> 
            <tr> 
             <td class="white-box">NANDANI</td> 
             <td class="white-box">TINBATTI CHOWK</td> 
             <td class="white-box">TINBATTI CHOWK</td> 
             <td class="white-box">KABNOOR</td> 
             <td class="white-box">RANGOLI</td> 
             <td class="white-box">ALATE</td> 
             <td class="white-box">RUIMALA</td> 
            </tr> 
            <tr> 
             <td class="gray-box">HAROLI</td> 
             <td class="gray-box">TAMBE MALA</td> 
             <td class="gray-box">BANDGAR MALA</td> 
             <td class="gray-box">KOLHAPUR NAKA</td> 
             <td class="gray-box">MANAKAPUR PHATA</td> 
             <td class="gray-box"></td> 
             <td class="gray-box"></td> 
            </tr> 
            <tr> 
             <td class="white-box">JAMBALI</td> 
             <td class="white-box">LIMBU CHOWK</td> 
             <td class="white-box">PANCHVATI TALKIES</td> 
             <td class="white-box">SHAHU PUTALA</td> 
             <td class="white-box">NADIVES NAKA</td> 
             <td class="white-box">HINGANGAON</td> 
             <td class="white-box"></td> 
            </tr> 
            <tr> 
             <td class="gray-box">YADRAV</td> 
             <td class="gray-box">AWADE NAGAR</td> 
             <td class="gray-box">LAYKAR TALKIES</td> 
             <td class="gray-box">AWALE PETROLPUMP</td> 
             <td class="gray-box">RAJWADA</td> 
             <td class="gray-box">KUMBHOJ</td> 
             <td class="gray-box"></td> 
            </tr> 
            <tr> 
             <td class="white-box">YADRAV PHATA</td> 
             <td class="white-box">AWADE TALKIES</td> 
             <td class="white-box">SHAHU PUTALA</td> 
             <td class="white-box">MANAS HOTEL</td> 
             <td class="white-box">YCP</td> 
             <td class="white-box">NARANDE</td> 
             <td class="white-box"></td> 
            </tr> 
            <tr> 
             <td class="gray-box">SANGLI NAKA</td> 
             <td class="gray-box">CHANDANI CHOWK</td> 
             <td class="gray-box">LINGADE MALA</td> 
             <td class="gray-box">AMBEDAKAR PUTALA</td> 
             <td class="gray-box">MR.RAMESH EKANDE - (9975460510)</td> 
             <td class="gray-box">BUVACHE VATHAR</td> 
             <td class="gray-box"></td> 
            </tr> 
       
          </table> 
         </div> 

                    </div>
                </div>
</div>




<?php require("footer.php"); ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 900px;
  height: 230px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 230px;
  width: 900px;
  opacity: 0;
  transition: .5s ease;
  background-color: #252525;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.hide{
    display: none;
}

.card1{
    margin:20px 0px 20px 400px;
}

.card2{
    margin: 0px 364px 20px auto;
}

.card3{
    margin:20px 0px 20px 400px;
}

.information{
        padding: 10px 398px 10px 398px;
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }


</style>
</head>
<body>

<div class="container card1">
  <img src="../ui/img/hash2.png" class="image">
  <div class="overlay" onclick="nextImg()">
    <div class="text">The MD5 message—digest algorithm is a widely used hash function producing  a 128-bit hash value. MD5 was designed by Ronald Rivest in 1991 to replace MD4. MD5 can be used as a checksum to verify data integrity against unintentional corruption. Historically it was widely used as a cryptographic hash function; however it has been found to suffer from extensive vulnerabilities. It remains suitable for other non-cryptographic purposes.</div>
  </div>
</div>

<div class="container card2 hide" id="container2">
    <img src="../ui/img/card_brute2.jpg" class="image">
    <div class="overlay" onclick="nextImg1()">
      <div class="text">Hello World</div>
    </div>
</div>

<div class="container card3 hide" id="container3">
    <img src="../ui/img/card_brute3.jpg" class="image">
    <div class="overlay" onclick="nextImg2()">
      <div class="text">Hello World</div>
    </div>
</div>

<div class="information hide" id="information">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

    </p>
</div>



</body>

<script>

function nextImg(){
    document.getElementById("container2").style.display='block';

}

function nextImg1(){
    document.getElementById("container3").style.display='block';
}

function nextImg2(){
    document.getElementById("information").style.display='block';
}
</script>


</html>




A basic requirement of any cryptographic hash function is that it should be computationally infeasible to find 2 distinct messages that hash to the same value and MD5 fails that requirement catastrophically. It has been exploited in the field, most infamously by the flame malware. The malware authors identified a Microsoft Terminal server licensing service certificate that inadvertently was enabled for code signing and that still used the MD5 hashing algorithm which made the operation successful. However, MD5 continues to be widely used, despite its well-known weaknesses.
The main MD5 algorithm operates on a 128-bit state, divided into four 32-bit words, denoted A, B, C, and D. These are initialized to certain fixed constants. The main algorithm then uses each 512-bit message block in turn to modify the state. The processing of a message block consists of four similar stages, termed rounds; each round is composed of 16 similar operations based on a non-linear function F, modular addition, and left rotation. There are four possible functions; a different one is used in each round:
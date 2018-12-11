.main{
height:100%; 
margin-top:300px;
margin-right:80px;
margin-left:40px;
position: absolute;
margin:0;
top: 15%;
left: 0%;
}

#main1{
cellspacing: 0; 
cellpadding: 11px;
align: left;
width:85%;
margin-top: -130%;
}

#head{
font-size:20pt;
background:rgb(248, 234, 180);
color:black;
align:center;
}

#head1{
font-size:20pt;
}

.footer {
position: absolute;
margin: 0;
top: 130%;
left: 0;
}

.container {
    position: relative;
    width: 110%;
	height:110%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 60%;
  left: 60%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 80px;
  padding: 16px 32px;
  border-radious:20px;
}

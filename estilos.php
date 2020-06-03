* {
  box-sizing: border-box;
}
/*Estilo do Body*/
body {
  font-family: Arial Narrow;
  margin: 0;
}
/*Banner do Titulo*/
.header {
  min-height: 325px;
	background-image: url(imagens/Code88.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 70% 100%;
  background-color: #38b6ff;
}
/* Estilo Navbar */
.navbar {
  display: flex;
  background-color: #333333;
  min-height:51px;
}
/* Estilo Navbar Links */
.navbar a {
  color: white;
  padding: 15px 15px;
  text-decoration: none;
  text-align: center;

}
/* Mudar as cores ao passar o mouse */
.navbar a:hover {
  background-color: #ffffff;
  color: #000000;
  border-bottom-color: #38b6ff;
  border-bottom-style: solid;
}
/* coluna */
.row { 
  display: flex;
  flex-wrap: wrap;
}
/* Criar colunas e corpo principal */
/* Coluna esquerda */
.side {
  flex: 25%;
  padding: 20px;
  background-color: #ffffff;
}
/* Coluna Principal */
.main {
  flex: 50%;
  background: #ffffff;
  padding: 20px;
}
/* Background dos elementos */
.fakeimg {
  background-color: #d9d9d9;
  width: 100%;
  padding: 10px;
  border-style: solid;
  border-color: #000000;
  border-top-color: #d9d9d9;
}
.fakeimg2 {
  background-color: #38b6ff;
  width: 100%;
  padding: 20px;
  border-top: 10px solid #000000;
  border-style: solid;
  border-color: #000000;
}
.fakeimg3{
  background-color: #d9d9d9;
  width: 100%;
  padding: 10px;
  border-style: solid;
  border-color: #000000;
  border-top-color: #d9d9d9;
}
.fakeimg4{
  background-color: #38b6ff;
  width: 100%;
  padding: 20px;
  border-top: 10px solid #000000;
  border-style: solid;
  border-color: #000000;
}
/* rodapé */
.footer {
  padding: 10px;
  text-align: center;
  background: #333;
  color: white;
  font-size: 13px;
}
/* Layout responsivo */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}

.icon-bar {
  position: fixed;
  top: 33%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}
.google {
  background: #dd4b39;
  color: white;
}
.linkedin {
  background: #007bb5;
  color: white;
}
.instagram {
  background: #517fa4;
  color: white;
}
.whatsapp {
  background: #34af23;
  color: white;
}
.content {
  margin-left: 75px;
  font-size: 30px;
}
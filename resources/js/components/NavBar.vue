<template>
  <nav class="nav">
    <ul class="font-bold uppercase">
      <li><a href="">Inicio</a></li>
      <li><a href="">Nuevo Usuario</a></li>
      <li><a href="">Nuevo Curso</a></li>
      <li><a href="">Abrir Año Escolar</a></li>
      <li><a href="">Cerrar Año Escolar</a></li>
      <li><a href="">Cerrar Sesion</a></li>
    </ul>
  </nav>
</template>

<script>
export default {};
</script>

<style>
.nav {
  width: 30%;
  background: #eee;
}
.nav ul{
  list-style: none;
  width: 100%;
  margin: 0px;
  padding: 0px;
  display: flex;
  flex-direction: column;
}
.nav ul li{
  width: 100%;
}
.nav ul li a{
  display: block;
  width: 100%;
  padding: 20px;
  border-left: 5px solid;
  position: relative;
  z-index: 2;
  text-decoration: none;
  color: #444;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.nav ul li a:after{
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  width: 0px;
  position: absolute;
  transition: all 0.3s ease 0s;
  -webkit-transition: all 0.3s ease 0s;
  z-index: -1;
}
.nav li a:hover{ border-bottom: 0px; color: #fff;}

.nav li:first-child a{ border-left: 10px solid #3498db; }
.nav li:nth-child(2) a{ border-left: 10px solid #ffd071; }
.nav li:nth-child(3) a{ border-left: 10px solid #1abc9c; }
.nav li:nth-child(4) a{ border-left: 10px solid #3498db; }
.nav li:nth-child(5) a{ border-left: 10px solid #ffd071; }
.nav li:last-child a{ border-left: 10px solid #f0776c; }

.nav li a:hover:after{ width: 100%; }

.nav li:first-child a:after{ background: #3498db; }
.nav li:nth-child(2) a:after{ background: #ffd071; }
.nav li:nth-child(3) a:after{ background: #1abc9c; }
.nav li:nth-child(4) a:after{ background: #3498db; }
.nav li:nth-child(5) a:after{ background: #ffd071; }
.nav li:last-child a:after{ background:#f0776c; }

</style>

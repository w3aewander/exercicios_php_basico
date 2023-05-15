<div class="footer">
  <div id="relogio">
  </div>
</div>

<script>

const relogio = () => {

const d = new Date();

  let dia = d.getDate();
  let mes = d.getMonth();
  let ano = d.getFullYear();
  let hora = d.getHours();
  let minuto = d.getMinutes();
  let segundo = d.getSeconds();

  const array_mes = [
    "janeiro", "fevereiro", 
    "março", "abril", 
    "maio", "junho", 
    "julho", "agosto", 
    "setembro","outubro", 
    "novembro", "dezembro"
  ];

  let relogio = `${dia} de ${array_mes[mes]} de ${ano} - ${hora.toString().padStart(2,'0')}: ${minuto.toString().padStart(2,'0')} :${segundo.toString().padStart(2,'0')}`;

  return relogio;

};

  document.addEventListener('DOMContentLoaded', (evt)=>{
    setInterval( () => { 
        document.getElementById('relogio').innerHTML = relogio();
    }, 1000);
  });

</script>

</body>
</html>
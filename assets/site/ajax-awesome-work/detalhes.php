<div class="cbp-l-project-title js-nome-da-categoria"></div>

<div class="cbp-slider">
    <ul id="js-lista-de-imagens-do-item" class="cbp-slider-wrap">

    </ul>
</div>
<script>
    $('.js-nome-da-categoria').text(window.categoria);
    for (var i = 0; i < window.listaDeImagens.length; i++) {
        var ul = document.getElementById("js-lista-de-imagens-do-item");
        var li = document.createElement("li");
        li.className = "cbp-slider-item";
        li.innerHTML = '<img src="' + window.urlBase + 'assets/admin/img/portfolio/' + window.categoria + '/' + window.listaDeImagens[i].nome + '">';
        ul.insertBefore(li, null);
    }
</script>
<br><br><br>

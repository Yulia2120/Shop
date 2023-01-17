<?php
echo "<link rel='stylesheet' href='filter.css'>";
?>
<div id="myBtnContainer">
    <button class="btn btn-warning active mb-2" onclick="filterSelection('all')"> Показать все</button>
    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('phone')"> Телефоны</button>
    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('laptop')">Ноутбуки</button>
    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('headset')">Гарнитура</button>
    <button class="btn btn-outline-warning text-dark mb-2" onclick="filterSelection('slipcovers')">Чехлы</button>
</div>
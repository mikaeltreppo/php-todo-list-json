<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="app">

<ul>
    <li v-for='todo in todoList' v-bind:class = "(todoItem == true)?'removed':''">{{todo}} <button @click='remove'>Cancella</button></li>
</ul>
<input type="text" v-model='todoItems'>
<button type="submit" @click='addItem'>Aggiungi</button>


</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="main.js"></script>
</body>
</html>
$(function(){
  var current = '#first';

  var players = [{
  "jerseyNumber": 1,
  "first_name": "Kirstin",
  "last_name": "Fedder",
  "position": "BR"
}, {
  "jerseyNumber": 2,
  "first_name": "Saw",
  "last_name": "Barnham",
  "position": "ID"
}, {
  "jerseyNumber": 3,
  "first_name": "Kelvin",
  "last_name": "Zanni",
  "position": "CN"
}, {
  "jerseyNumber": 4,
  "first_name": "Kelli",
  "last_name": "Tomblings",
  "position": "FR"
}, {
  "jerseyNumber": 5,
  "first_name": "Emmalyn",
  "last_name": "Serck",
  "position": "SE"
}, {
  "jerseyNumber": 6,
  "first_name": "Berkly",
  "last_name": "Fendley",
  "position": "PL"
}, {
  "jerseyNumber": 7,
  "first_name": "Monah",
  "last_name": "Beames",
  "position": "UA"
}, {
  "jerseyNumber": 8,
  "first_name": "Elicia",
  "last_name": "McGettigan",
  "position": "KH"
}, {
  "jerseyNumber": 9,
  "first_name": "Gamaliel",
  "last_name": "Poynton",
  "position": "BR"
}, {
  "jerseyNumber": 10,
  "first_name": "Cornie",
  "last_name": "Frenchum",
  "position": "BG"
}, {
  "jerseyNumber": 11,
  "first_name": "Zarla",
  "last_name": "Harbard",
  "position": "CN"
}, {
  "jerseyNumber": 12,
  "first_name": "Christos",
  "last_name": "Mees",
  "position": "CZ"
}, {
  "jerseyNumber": 13,
  "first_name": "Lyle",
  "last_name": "Van Velde",
  "position": "CO"
}, {
  "jerseyNumber": 14,
  "first_name": "Red",
  "last_name": "Margery",
  "position": "RU"
}, {
  "jerseyNumber": 15,
  "first_name": "Clark",
  "last_name": "Biasioni",
  "position": "CO"
}, {
  "jerseyNumber": 16,
  "first_name": "Son",
  "last_name": "Ollis",
  "position": "AR"
}, {
  "jerseyNumber": 17,
  "first_name": "Hughie",
  "last_name": "Stobbe",
  "position": "PK"
}, {
  "jerseyNumber": 18,
  "first_name": "Cherice",
  "last_name": "Anthes",
  "position": "PA"
}, {
  "jerseyNumber": 19,
  "first_name": "Basilio",
  "last_name": "Darmody",
  "position": "CN"
}, {
  "jerseyNumber": 20,
  "first_name": "Alric",
  "last_name": "O'Connel",
  "position": "KG"
}, {
  "jerseyNumber": 21,
  "first_name": "Morgana",
  "last_name": "Priter",
  "position": "PK"
}, {
  "jerseyNumber": 22,
  "first_name": "Teodoor",
  "last_name": "Habbema",
  "position": "PH"
}];
        console.log(players[0]['jerseyNumber']);

        for(i = 0; i < players.length; i++){
          $('#inner').append('<div class="item"><p>'+players[i]["jerseyNumber"]+'</p><p>'+players[i]["first_name"]+' '+players[i]["last_name"]+'</p><p>'+players[i]["position"]+'</p></div>')
        }

  $("#home").click(function(){
    $(current).hide('slide', {direction: 'right'}, 1000);
    current = "#first"
    $("#first").delay(500).show('slide', {direction: 'left'}, 1500);
  });

  $("#roster").click(function(){
    $(current).hide('slide', {direction: 'left'}, 1000);
    current = "#secondContent";
    $("#secondContent").delay(500).show('slide', {direction: 'right'}, 1500);
  });



  $("#contact").click(function(){
    $(current).hide('slide', {direction: 'left'}, 1000);
    current = "#contactContent";
    $("#contactContent").delay(500).show('slide', {direction: 'right'}, 1500);
  });

});

import axios from 'axios';

console.log("Часть 1");
console.log("test.js : подключился.");


// Часть 2
// сделай запрос POST к /api/test/
// сходи, проверь куда приведёт это обращение
// routes/api.php => TestController@test
// получишь оттуда данные 
axios.post('/api/test').then(response => {
  console.log("---------");
  console.log("Часть 2");
  console.log(response.data);
});


// Часть 3
axios.post('/api/askAge', { age: 21 }).then(response => {
  console.log("---------");
  console.log("Часть 3");
  console.log(`JS : мне сейчас {age}`);
  console.log(response.data);
});
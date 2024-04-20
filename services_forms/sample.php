<div class="card-wrap">
  <div class="card-header one">
    <i class="fas fa-code"></i>
  </div>
  <div class="card-content">
    <h1 class="card-title">Title</h1>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <button class="card-btn one">code</button>
  </div>
</div>
<div class="card-wrap">
  <div class="card-header two">
    <i class="fab fa-css3-alt"></i>
  </div>
  <div class="card-content">
    <h1 class="card-title">Title</h1>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <button class="card-btn two">css3</button>
  </div>
</div>
<div class="card-wrap">
  <div class="card-header three">
    <i class="fab fa-html5"></i>
  </div>
  <div class="card-content">
    <h1 class="card-title">Title</h1>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <button class="card-btn three">html5</button>
  </div>
</div>
<div class="card-wrap">
  <div class="card-header four">
    <i class="fab fa-js-square"></i>
  </div>
  <div class="card-content">
    <h1 class="card-title">Title</h1>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <button class="card-btn four">js</button>
  </div>
</div>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap");
* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
:root {
  --color-text: #616161;
  --color-text-btn: #ffffff;
  --card1-gradient-color1: #11998e;
  --card1-gradient-color2: #38ef7d;
  --card2-gradient-color1: #11998e;
  --card2-gradient-color2: #38ef7d;
  --card3-gradient-color1: #11998e;
  --card3-gradient-color2: #38ef7d;
  --card4-gradient-color1: #11998e;
  --card4-gradient-color2: #38ef7d;
}
body {
  font-family: "Roboto", sans-serif;
  background: linear-gradient(to right, #8e9eab, #eef2f3);
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
}
.card-wrap {
  width: 220px;
  background: #fff;
  border-radius: 20px;
  border: 5px solid #fff;
  overflow: hidden;
  color: var(--color-text);
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}
.card-wrap:hover {
  transform: scale(1.1);
}
.card-header {
  height: 200px;
  width: 100%;
  background: red;
  border-radius: 100% 0% 100% 0% / 0% 50% 50% 100%;
  display: grid;
  place-items: center;
}

.card-header i {
  color: #fff;
  font-size: 72px;
}
.card-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 60%;
  margin: 0 auto;
}
.card-title {
  text-align: center;
  text-transform: uppercase;
  font-size: 16px;
  margin-top: 10px;
  margin-bottom: 20px;
}
.card-text {
  text-align: center;
  font-size: 12px;
  margin-bottom: 20px;
}
.card-btn {
  border: none;
  border-radius: 100px;
  padding: 5px 30px;
  color: #fff;
  margin-bottom: 15px;
  text-transform: uppercase;
}
.card-header.one {
  background: linear-gradient(
    to bottom left,
    var(--card1-gradient-color1),
    var(--card1-gradient-color2)
  );
}
.card-header.two {
  background: linear-gradient(
    to bottom left,
    var(--card2-gradient-color1),
    var(--card2-gradient-color2)
  );
}
.card-header.three {
  background: linear-gradient(
    to bottom left,
    var(--card3-gradient-color1),
    var(--card3-gradient-color2)
  );
}
.card-header.four {
  background: linear-gradient(
    to bottom left,
    var(--card4-gradient-color1),
    var(--card4-gradient-color2)
  );
}

.card-btn.one {
  background: linear-gradient(
    to left,
    var(--card1-gradient-color1),
    var(--card1-gradient-color2)
  );
}
.card-btn.two {
  background: linear-gradient(
    to left,
    var(--card2-gradient-color1),
    var(--card2-gradient-color2)
  );
}
.card-btn.three {
  background: linear-gradient(
    to left,
    var(--card3-gradient-color1),
    var(--card3-gradient-color2)
  );
}
.card-btn.four {
  background: linear-gradient(
    to left,
    var(--card4-gradient-color1),
    var(--card4-gradient-color2)
  );
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="menu__container">
  <ul class="menu__first">
    <li id="one">
      <a >first</a>
      <div class="one">
        <ol>
          <li data-at="some-link" id="two">
            <a href="#"> some</a>
          </li>
          <li data-at="path-link" id="two">
            <a href="#"> path</a>
          </li>
          <li data-at="another-one" id="two">
            <a href="#"> another one</a>
          </li>
        </ol>
      </div>
    </li>
  </ul>
</div>

<style type="text/css">
  .menu__container {
  margin: 0 auto;
  padding: 10px;
}

.two {
  display: none;
}

.is-active {
  display: block;
}

.one {
  display: none;
  top: 60px;
  padding-top: 25px;
  position: absolute;
  background: #777;
}

li#one>a {
  padding: 10px;
  background-color: #eee;
}

.menu__first {
  background-color: #eee;
}

#one:hover>div.one {
  display: block;
}

#one {
  float: left;
  display: block;
}
</style>
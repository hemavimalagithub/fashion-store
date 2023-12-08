
<div class="auto-group-tkwo-VCD">
    <div class="auto-group-agio-aUZ">
      <div class="group-1-J9f">
        <img class="shoppingbag-2bT" src="home/page-1/assets/shoppingbag.png"/>
        <img class="modenteo-Yph" src="home/page-1/assets/modenteo.png"/>
      </div>
      <div class="navbar-nav-tdf">
        <div class="li-RtV">
          <div class="a-C8Z">
            <div class="btn-32-Mn9">
              <img class="icn-settings-icn-xs-gZX" src="home/page-1/assets/icn-settings-icn-xs-Ru3.png"/>

              @if(Route::has('login'))

              @auth

              <p class="login-register-RGD"><a href="{{ route('logout') }}">logout</a></p>

               @else
              <p class="login-register-RGD"><a href="{{ route('login') }}"> Login</a>/ <a href="{{ route('register') }}">register</a></p>
              @endauth
              @endif
            </div>
          </div>
        </div>
        <div class="image-container">
            <img class="li-8Ad" src="home/page-1/assets/li.png" alt="Search Image">
            <div class="search-modal">
                <input type="text" id="searchBar" placeholder="Search...">
            </div>
        </div>
        <div class="auto-group-tdxz-fwF">
          <div class="li-JUR">
            <div class="a-f45">
              <div class="btn-32-RZ3">
                <a href=""><img class="icn-settings-icn-xs-yaZ" src="home/page-1/assets/icn-settings-icn-xs-6BT.png"/></a>
                <p class="item-1-uDK">1</p>
              </div>
            </div>
          </div>
          <div class="li-QA5">
            <div class="a-AQ9">
              <div class="btn-32-XkV">
                <a href=""><img class="icn-settings-icn-xs-5n1" src="home/page-1/assets/icn-settings-icn-xs-KFf.png"/></a>
                <p class="item-1-Cbj">1</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="group-2-6SD">
      <p class="link-E2d"><a href="">Home</a></p>
      <p class="link-7s7"><select>
        <option value="tesla">New</option>
        <option value="volvo">Volvo</option>
        <option value="mercedes">Mercedes</option>
    </select>

    </p>

      <p class="category-YhX"><select>
        <option value="tesla">Men</option>
        <option value="volvo">Volvo</option>
        <option value="mercedes">Mercedes</option>
    </select></p>
      <p class="link-C1P"><select>
        <option value="tesla">Women</option>
        <option value="volvo">Volvo</option>
        <option value="mercedes">Mercedes</option>
    </select></p>
      <p class="link-Req"><select>
        <option value="tesla">kids</option>
        <option value="volvo">Volvo</option>
        <option value="mercedes">Mercedes</option>
    </select></p>

      <p class="link-3AR"><select>
        <option value="tesla">Seasons</option>
        <option value="volvo">Volvo</option>
        <option value="mercedes">Mercedes</option>
    </select></p>
      <p class="link-sQM"><a href="">Sale</a></p>
    </div>
  </div>

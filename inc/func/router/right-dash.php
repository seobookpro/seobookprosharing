
<input type="checkbox" id="menu">
<label for="menu" class="icon">
        <div class="hamb"></div>
 </label>
<nav class="sn">
<ul class="homed">
<li><span class="material-symbols-outlined">home</span></li>
<li><span class="material-symbols-outlined">person</span></li>
<li><span class="material-symbols-outlined">add</span></li>
<li><span class="material-symbols-outlined">home</span></li>
<li><span class="material-symbols-outlined">person</span> Introduction</li>
<li><span class="material-symbols-outlined">abc</span> Introduction</li>
<li><span class="material-symbols-outlined">apps</span> Documentation</li>
<li><span class="material-symbols-outlined">settings</span> Register</li>
<li><span class="material-symbols-outlined">web</span> Register</li>
<li><span class="material-symbols-outlined">hive</span> Register</li>
<li><span class="material-symbols-outlined">calendar_month</span> Register</li>
<li><span class="material-symbols-outlined">event</span> Register</li>
<li><span class="material-symbols-outlined">add</span> Dashboard</li>
<li><span class="material-symbols-outlined">dataset</span>Add Project</li>
<li><span class="material-symbols-outlined">javascript</span>Setup Project</li>
<li><span class="material-symbols-outlined">css</span>Run Audit</li>
<li><span class="material-symbols-outlined">html</span>Save Audit</li>
<li><span class="material-symbols-outlined">empty_dashboard</span></li>
<li><span class="material-symbols-outlined">rebase_edit</span></li>
</ul>
</nav>


<style>


input#menu {
    display: none;
}

.icon {
    background: #fff;
    cursor: pointer;
    display: block;
    height: 48px;
    padding: 16px;
    width: 52px;
}

label.icon {
    position: fixed;
    z-index: 200;
    padding: 0px;
    display: flex;
    text-align: center;
    margin: 0px auto;
    top: auto;
    left: auto;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;

}

.icon .hamb,
.icon .hamb::before,
.icon .hamb::after {
    background: #212529;
    content: '';
    display: block;
    height: 3px;
    position: absolute;
    transition: background ease .3s, top ease .3s .3s, transform ease .3s;
    width: 37px;
}

.icon:hover .hamb,
.icon:hover .hamb::before,
.icon:hover .hamb::after {
    background: #47B74B;
}

.icon .hamb {
    left: 8px;
    top: 23px;
}

.icon .hamb::before {
    top: -10px;
}

.icon .hamb::after {
    top: 10px;
}

#menu:checked + .icon .hamb {
    background: transparent;
}

#menu:checked + .icon .hamb::before {
    transform: rotate(45deg);
}

#menu:checked + .icon .hamb::after {
    transform: rotate(-45deg);
}

#menu:checked + .icon .hamb::before,
#menu:checked + .icon .hamb::after {
    top: 0;
    transition: top ease .3s, transform ease .3s .3s;
}

nav.sn {
    background: #fff0;
    height: 100vh;
    padding-top: 60px;
    position: fixed;
    transition: width ease .6s;
    width: 0%;
    z-index: 100;
    overflow: hidden;
}

#menu:checked ~ nav.sn {
    width: 2.3% !important;
    margin: 81px 0px 0px 3px;
    padding: 0px;
    background: #070c4f;
    text-align: center !important;
    max-height: 84%;
}

nav.sn ul {
    list-style: none;
    margin: 0px;
    padding: 20px 0px 0px 0px;
    text-align: center;
    width: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: stretch;
}
nav.sn li {
    cursor: pointer;
    display: block;
    line-height: 30px;
    padding: 10px;
    white-space: nowrap;
}
nav.sn li span{
margin-right: 40px;
}
nav.sn i {
    color: #9FB1BD;
    margin-right: 24px;
    vertical-align: text-bottom;
}


</style>

<nav class="nav">
    <div class="container-fluid">
        <div class="navbar">
            <div class="logo">
                <img src="/img/JobPlaza_logov2.png" alt="JobPlaza">
            </div>
           
        </div>
        <div class="navbarRightside">
            <div class="navlink">
                <ul>
                   <li><a class="{{ setActiveLink('jobs') }}" href="/jobs">Jobs</a></li>
                   <li><a class="{{ setActiveLink('companies') }}" href="/companies">Company</a></li>
               </ul>
            </div>
            <div class="rLP">
                <div class="register_login">
                    <p>
                        <a href="#">Login</a>
                        /
                        <a href="#">Register</a>
                    </p>
                </div>
                <div class="line"></div>
                <div class="Post_Job">
                    <li><a class="{{ setActiveLink('jobs/create') }}"href="/jobs/create">Employer / Post Job</a></li>
                </div>
            </div>
        </div>
    </div>
</nav>

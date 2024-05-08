<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/acl.css">

    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="/assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" defer></script>
    
    <title>Proxy</title>
</head>
<body>
    <input type="hidden" id="currentLink" value="acl">
    <div class="sidebar position-fixed vw-20">
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
            </symbol>
            <symbol id="dashboard" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
            </symbol>
        </svg>

        <div class="sidebar vw-20 d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
            <span class="fs-4 text-black">
            <img src="/assets/images/proxy.png" width="100" height="100">
            Proxy MIT
            </span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a id="home" href="/home" class="nav-link text-black" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                    Home
                    </a>
                </li>
                <li>
                    <a id="dashboard" href="/dashboard" class="nav-link text-black">
                    <svg class="bi pe-none me-2" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512">
                        <path d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z"/>
                    </svg>
                    Dashboard
                    </a>
                </li>
                <li>
                    <a id="acl" href="/acl" class="nav-link text-black">
                    <svg class="bi pe-none me-2" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M512.1 191l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0L552 6.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zm-10.5-58.8c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.7-82.4 14.3-52.8 52.8zM386.3 286.1l33.7 16.8c10.1 5.8 14.5 18.1 10.5 29.1-8.9 24.2-26.4 46.4-42.6 65.8-7.4 8.9-20.2 11.1-30.3 5.3l-29.1-16.8c-16 13.7-34.6 24.6-54.9 31.7v33.6c0 11.6-8.3 21.6-19.7 23.6-24.6 4.2-50.4 4.4-75.9 0-11.5-2-20-11.9-20-23.6V418c-20.3-7.2-38.9-18-54.9-31.7L74 403c-10 5.8-22.9 3.6-30.3-5.3-16.2-19.4-33.3-41.6-42.2-65.7-4-10.9.4-23.2 10.5-29.1l33.3-16.8c-3.9-20.9-3.9-42.4 0-63.4L12 205.8c-10.1-5.8-14.6-18.1-10.5-29 8.9-24.2 26-46.4 42.2-65.8 7.4-8.9 20.2-11.1 30.3-5.3l29.1 16.8c16-13.7 34.6-24.6 54.9-31.7V57.1c0-11.5 8.2-21.5 19.6-23.5 24.6-4.2 50.5-4.4 76-.1 11.5 2 20 11.9 20 23.6v33.6c20.3 7.2 38.9 18 54.9 31.7l29.1-16.8c10-5.8 22.9-3.6 30.3 5.3 16.2 19.4 33.2 41.6 42.1 65.8 4 10.9.1 23.2-10 29.1l-33.7 16.8c3.9 21 3.9 42.5 0 63.5zm-117.6 21.1c59.2-77-28.7-164.9-105.7-105.7-59.2 77 28.7 164.9 105.7 105.7zm243.4 182.7l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0l8.2-14.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zM501.6 431c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.6-82.4 14.3-52.8 52.8z"/>
                    </svg>
                    ACL
                    </a>
                </li>
                <li>
                    <a id="squid" href="/squid" class="nav-link text-black">
                    <svg class="bi pe-none me-2" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z"/>
                    </svg>
                    Squid
                    </a>
                </li>
            </ul>
        </div>
        
        <script src="/assets/js/sidebars.js"></script>
    </div>
    
    <div class="main-content">
        <div class="container">
            <div class="acl container d-flex-column">
                <!-- Access, Directive, Status menu -->
                <div class="menu container d-flex-columns vh-100">
                    <h1 class="pt-5 container">Configure Access Control</h1>
                    <div class="pt-5 conAcl container d-flex">
                        <a class="nav-link" href="#access-link">
                            <div class="container d-flex-column">
                                <img src="/assets/images/access.png" width="200" height="200">
                                <h4>Access</h4>
                            </div>
                        </a>

                        <a class="nav-link" href="#directive-link">
                            <div class="container d-flex-column">
                                <img src="/assets/images/ACL.png" width="200" height="200">
                                <h4>Directives</h4>
                            </div>
                        </a>

                        <a class="nav-link" href="#status-link">
                            <div class="container d-flex-column">
                                <img src="/assets/images/status.png" width="200" height="200">
                                <h4>Status</h4>
                            </div>
                        </a>  

                    </div>
                </div>
                
                <!-- Access -->
                <hr>
                <section  class="aclLink container d-flex-column vw-100" id="access-link">
                    
                    <section class="add-access">
                      <div class="containeradd d-flex">
                        
                        
                        <div class="section s1">
                            <div class="radio">

                              <div class="radio1">
                                <label for="1"> Deny </label>
                                <input id="1" type="radio" name="access_radio" value="deny" checked>
                              </div>
                              
                              <div class="radio1">
                                <label for="2"> Allow </label>
                                <input id="2" type="radio" name="access_radio" value="allow">
                              </div>

                            </div>
                        </div>

                        
                        <div class="section s2" id="access_choise_declaration">
                        </div>

                        
                        <div class="section s3">
                            <div class="btns">
                              <button class="cancel">annuler</button>
                              <button class="ok" id="access_confirm_add">confirmer</button>
                            </div>
                        </div>

                      </div>
                    </section>
                    
                    <section class="acl-access d-flex-row vw-70">
                       <table class="table accessTable vw-80">
                          <thead>
                            <tr class="">
                              <th>Nom</th>
                              <th>Accès</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody class="tbody" id="access_tableau"><!--Backend--></tbody>
                        </table>  
                    </section>

                    <div class="submit">
                      <button class="access-add-btn btn-primary" id="access_add">Ajouter</button>
                      <button class="btn-primary" id="access_save">Sauvegarder</button>
                      <button class="access-reset-btn btn-primary" id="access_restore">Restaurer</button>
                    </div>
 
               </section>

                <!-- Directives -->
                <hr>
                <section class="aclLink" id="directive-link">
                    <section class="add-directive">
                    <div class="containeradd">
                        <div class="dir">
                        <div class="section s1">
                            Name: <input name="name" type="text" required />
                            <label class="title"></label>
                            
                        </div>
                        <div id="add-content" class="section s2"></div>
                        <button class="plus" onClick="addInput(this,0)">+</button>
                        <div class="section s3">
                            
                            <div class="btns">
                            <button class="cancel">annuler</button>
                            <button id="add_acl" class="ok">confirmer</button>
                            </div>
                        </div>
                        </div>
                        <div class="containerdir"></div>
                    </div>
                    </section>
                    <section class="acl-directive">
                    <div class="acl-directive-box">
                        <div class="logo"></div>
                        <div class="select">
                        <div>
                            <label for="type">Type :</label>
                            <select id="type" name="type">
                            <option>Ip</option>
                            <option>Domain_name</option>
                            <option>Port</option>
                            <option>Time</option>
                            <option>HTTP_Method</option>
                            <option>File</option>
                            <option>HTTP_Status</option>

                            <option>URL</option>
                            <option>Mac</option>
                            <option>Protocol</option>
                            <option>Username</option>
                            <option>Peer_name</option>
                            <option>Server_name</option>
                            <option>Operative_word</option>
                            <option>Processing_step</option>
                            <option>Snmp_community</option>
                            <option>Max_user_ip</option>
                            <option>Max_connection</option>
                            <option>Header_name</option>
                            <option>Authentification</option>
                            </select>
                        </div>
                        <a
                            data-slide="6"
                            class="history-link"
                            href="#history-link"
                            >Voir Historique</a
                        >
                        </div>
                        <div class="table">
                        <div class="th">
                            <div id="title" class="mac-and-ip">
                            <h1>Détails</h1>
                            </div>
                            <div class="actions">
                            <h1>Actions</h1>
                            </div>
                        </div>
                        <div id="directive" class="tbody">
                        </div>
                        </div>
                        <div class="submit">
                        <button class="directive-add-btn">Ajouter</button>
                        <button id="restore" class="directive-reset-btn">
                            Restaurer
                        </button>
                        </div>
                    </div>
                    </section>
                </section>
               
                <!-- Status -->
                <hr>
                <section class="aclLink" id="status-link">
                    <section class="acl-status">
                        <div class="acl-status-box">
                            <div class="logo"></div>

                            <div class="content" id="status_tableau">
                            </div>

                            <span class="red-square"></span>
                        </div>
                    </section>
                </section>

                <hr>
                <section id="history-link" class="swiper-slide log">
                    <div class="conLog">
                        <h3>Historique ACL</h3>
                        <section class="principale">
                            <div class="box">
                                <div class="filter">
                                <i class="fa fa-search"></i>
                                <input id="filter_History" type="text" />
                                <i class="fa fa-date"></i>
                                <input id="history_date" type="date" />
                                </div>
                                <div id="history" class="table">
                                </div>
                            </div>
                        </section>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- Scripts JS for backend and frontend link -->
    <script src="/assets/js/acl_access_status.js"></script>
    <script src="/assets/js/acl_access_add.js"></script>
    <script src="/assets/js/back.js"></script>
    <script src="/assets/js/acl.js"></script>

</body>
</html>

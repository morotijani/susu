<?php 
    require ('system/DatabaseConnector.php');
    
	// Check if the user is logged in
	if (!admin_is_logged_in()) {
		admin_login_redirect();
	}

    $body_class = '';
    include ('system/inc/head.php');
    include ('system/inc/modals.php');
    include ('system/inc/sidebar.php');
    include ('system/inc/topnav-base.php');
    include ('system/inc/topnav.php');

?>

    <!-- Main -->
    <main class="main px-lg-6">
        <!-- Content -->
        <div class="container-lg">
            <!-- Page content -->
            <div class="row align-items-center mb-2">
                <div class="col">
                    <!-- Heading -->
                    <h2 class="fs-3 mb-0">Trends</h2>
                </div>
                <div class="col-auto my-n2">
                    <!-- Select -->
                    <select
                    class="form-select"
                    data-choices='{ "searchEnabled": false, "choices": [{ "value": "month", "label": "Last month" }, { "value": "week", "label": "Last week" }, { "value": "day", "label": "Today" }] }'
                    ></select>
                </div>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-underline">
            <li class="nav-item" role="presentation">
                <button class="nav-link py-5 active" data-bs-toggle="tab" data-saas-performance-chart-type="revenue" type="button" aria-selected="true">
                Revenue
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link py-5" data-bs-toggle="tab" data-saas-performance-chart-type="users" type="button" aria-selected="false">
                Active users
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link py-5" data-bs-toggle="tab" data-saas-performance-chart-type="churn" type="button" aria-selected="false">Churn rate</button>
            </li>
            </ul>

            <!-- Divider -->
            <hr class="mt-0 mb-8" />

            <!-- Chart -->
            <div class="chart">
            <canvas class="chart-canvas" id="saasPerformanceChart"></canvas>
            </div>

        <!-- Divider -->
        <hr class="my-8" />

        <div class="row">
          <div class="col-12 col-xxl-8">
            <!-- Header -->
            <div class="row align-items-center mb-5">
              <div class="col">
                <!-- Heading -->
                <h2 class="fs-5 mb-0">Latest transactions</h2>
              </div>
              <div class="col-auto">
                <a class="btn btn-link my-n2" href="../ecommerce/orders.html">
                  Browse all
                  <span class="material-symbols-outlined">arrow_right_alt</span>
                </a>
              </div>
            </div>

            <!-- Table -->
            <div class="card mb-7 mb-xxl-0">
              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                      <th class="fs-sm">ID</th>
                      <th class="fs-sm">Client</th>
                      <th class="fs-sm">Amount</th>
                      <th class="fs-sm">Subscription Plan</th>
                      <th class="fs-sm">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#001</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-2.jpg" alt="..." />
                          </div>
                          Michael Johnson
                        </div>
                      </td>
                      <td>$499.00</td>
                      <td>Enterprise</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#002</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-1.jpg" alt="..." />
                          </div>
                          Emily Thompson
                        </div>
                      </td>
                      <td>$99.00</td>
                      <td>Pro</td>
                      <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#003</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-2.jpg" alt="..." />
                          </div>
                          Michael Johnson
                        </div>
                      </td>
                      <td>$999.00</td>
                      <td>Enterprise</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#004</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-5.jpg" alt="..." />
                          </div>
                          Jessica Miller
                        </div>
                      </td>
                      <td>$49.00</td>
                      <td>Basic</td>
                      <td><span class="badge bg-danger-subtle text-danger">Failed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#005</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-4.jpg" alt="..." />
                          </div>
                          Olivia Davis
                        </div>
                      </td>
                      <td>$199.00</td>
                      <td>Pro</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#006</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-2.jpg" alt="..." />
                          </div>
                          Michael Johnson
                        </div>
                      </td>
                      <td>$49.00</td>
                      <td>Basic</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#007</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-1.jpg" alt="..." />
                          </div>
                          Emily Thompson
                        </div>
                      </td>
                      <td>$499.00</td>
                      <td>Enterprise</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#008</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-2.jpg" alt="..." />
                          </div>
                          Michael Johnson
                        </div>
                      </td>
                      <td>$199.00</td>
                      <td>Pro</td>
                      <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#009</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-5.jpg" alt="..." />
                          </div>
                          Jessica Miller
                        </div>
                      </td>
                      <td>$49.00</td>
                      <td>Basic</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#010</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-4.jpg" alt="..." />
                          </div>
                          Olivia Davis
                        </div>
                      </td>
                      <td>$199.00</td>
                      <td>Pro</td>
                      <td><span class="badge bg-danger-subtle text-danger">Failed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#011</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-6.jpg" alt="..." />
                          </div>
                          Ethan Parker
                        </div>
                      </td>
                      <td>$499.00</td>
                      <td>Enterprise</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#012</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-1.jpg" alt="..." />
                          </div>
                          Sophia Lee
                        </div>
                      </td>
                      <td>$99.00</td>
                      <td>Pro</td>
                      <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#013</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-2.jpg" alt="..." />
                          </div>
                          Jack Miller
                        </div>
                      </td>
                      <td>$49.00</td>
                      <td>Basic</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#014</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-4.jpg" alt="..." />
                          </div>
                          Emily Johnson
                        </div>
                      </td>
                      <td>$199.00</td>
                      <td>Pro</td>
                      <td><span class="badge bg-danger-subtle text-danger">Failed</span></td>
                    </tr>
                    <tr role="button" data-bs-toggle="offcanvas" data-bs-target="#orderModal" aria-controls="orderModal">
                      <td>#015</td>
                      <td>
                        <div class="d-flex align-items-center text-nowrap">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img" src="../assets/img/photos/photo-6.jpg" alt="..." />
                          </div>
                          Noah Brown
                        </div>
                      </td>
                      <td>$99.00</td>
                      <td>Pro</td>
                      <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-12 col-xxl-4">
            <!-- Header -->
            <div class="row align-items-center mb-5">
              <div class="col">
                <!-- Heading -->
                <h2 class="fs-5 mb-0">Top referrers</h2>
              </div>
              <div class="col-auto my-n2">
                <a class="btn btn-link" href="#!">
                  Browse all
                  <span class="material-symbols-outlined">arrow_right_alt</span>
                </a>
              </div>
            </div>

            <div class="card mb-7">
              <div class="card-body">
                <!-- List -->
                <div class="vstack gap-2 mb-6">
                  <div class="row align-items-center gx-3">
                    <div class="col-auto"><span class="material-symbols-outlined text-primary me-1">circle</span> Google</div>
                    <div class="col"><hr style="border-style: dashed" /></div>
                    <div class="col-auto fs-sm text-body-secondary">52%</div>
                  </div>
                  <div class="row align-items-center gx-3">
                    <div class="col-auto"><span class="material-symbols-outlined text-success me-1">circle</span> Facebook</div>
                    <div class="col"><hr style="border-style: dashed" /></div>
                    <div class="col-auto fs-sm text-body-secondary">18%</div>
                  </div>
                  <div class="row align-items-center gx-3">
                    <div class="col-auto"><span class="material-symbols-outlined text-warning me-1">circle</span> LinkedIn</div>
                    <div class="col"><hr style="border-style: dashed" /></div>
                    <div class="col-auto fs-sm text-body-secondary">12%</div>
                  </div>
                  <div class="row align-items-center gx-3">
                    <div class="col-auto"><span class="material-symbols-outlined text-dark me-1">circle</span> Direct</div>
                    <div class="col"><hr style="border-style: dashed" /></div>
                    <div class="col-auto fs-sm text-body-secondary">18%</div>
                  </div>
                </div>

                <!-- Progress -->
                <div class="progress-stacked gap-1" style="--bs-progress-height: 1.5rem; --bs-progress-bg: var(--body-bg)">
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Google"
                    aria-valuenow="52"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 52%; --bs-progress-height: inherit"
                  >
                    <div class="progress-bar rounded bg-primary" data-bs-toggle="tooltip" data-bs-title="Google">52%</div>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Facebook"
                    aria-valuenow="18"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 18%; --bs-progress-height: inherit"
                  >
                    <div class="progress-bar rounded bg-success" data-bs-toggle="tooltip" data-bs-title="Facebook">18%</div>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="LinkedIn"
                    aria-valuenow="12"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 12%; --bs-progress-height: inherit"
                  >
                    <div class="progress-bar rounded bg-warning" data-bs-toggle="tooltip" data-bs-title="LinkedIn">12%</div>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Direct"
                    aria-valuenow="18"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 18%; --bs-progress-height: inherit"
                  >
                    <div class="progress-bar rounded bg-dark" data-bs-toggle="tooltip" data-bs-title="Direct">18%</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Header -->
            <div class="row align-items-center mb-5">
              <div class="col">
                <!-- Heading -->
                <h2 class="fs-5 mb-0">Support tickets</h2>
              </div>
              <div class="col-auto my-n2">
                <a class="btn btn-link" href="#!">
                  Browse all
                  <span class="material-symbols-outlined">arrow_right_alt</span>
                </a>
              </div>
            </div>

            <!-- Cards -->
            <div class="vstack gap-2 mb-7">
              <div class="card">
                <a class="card-body p-4" data-bs-toggle="collapse" href="#supportTicketOne" role="button" aria-expanded="true" aria-controls="supportTicketOne">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="avatar avatar-sm fs-lg text-primary"><i data-duoicon="smartphone"></i></div>
                    </div>
                    <div class="col ms-n3">
                      <h5 class="fs-sm fw-normal text-body-secondary mb-1">#10245</h5>
                      <h3 class="fs-base mb-0">Login issues on mobile</h3>
                    </div>
                    <div class="col-auto">
                      <span class="fs-sm text-body-secondary">Oct 01</span>
                    </div>
                  </div>
                </a>
                <div class="collapse show" id="supportTicketOne">
                  <div class="card-body border-top line-clamp-2 text-body-secondary py-4 px-0 mx-4">
                    A user reports being unable to log in on the mobile app. They've tried resetting their password but continue to receive an error message.
                    Further investigation needed.
                  </div>
                </div>
              </div>

              <div class="card">
                <a
                  class="card-body p-4"
                  data-bs-toggle="collapse"
                  href="#supportTicketTwo"
                  role="button"
                  aria-expanded="false"
                  aria-controls="supportTicketTwo"
                >
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="avatar avatar-sm fs-lg text-primary"><i data-duoicon="credit-card"></i></div>
                    </div>
                    <div class="col ms-n3">
                      <h5 class="fs-sm fw-normal text-body-secondary mb-1">#10245</h5>
                      <h3 class="fs-base mb-0">Payment not processing</h3>
                    </div>
                    <div class="col-auto">
                      <span class="fs-sm text-body-secondary">Sep 29</span>
                    </div>
                  </div>
                </a>
                <div class="collapse" id="supportTicketTwo">
                  <div class="card-body border-top line-clamp-2 text-body-secondary py-4 px-0 mx-4">
                    Customer is experiencing issues with the payment gateway. Transaction attempts are failing without a clear error message. This affects both
                    credit card and PayPal payments.
                  </div>
                </div>
              </div>

              <div class="card">
                <a
                  class="card-body p-4"
                  data-bs-toggle="collapse"
                  href="#supportTicketThree"
                  role="button"
                  aria-expanded="false"
                  aria-controls="supportTicketThree"
                >
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="avatar avatar-sm fs-lg text-primary"><i data-duoicon="moon-2"></i></div>
                    </div>
                    <div class="col ms-n3">
                      <h5 class="fs-sm fw-normal text-body-secondary mb-1">#10245</h5>
                      <h3 class="fs-base mb-0">Feature request: dark mode toggle</h3>
                    </div>
                    <div class="col-auto">
                      <span class="fs-sm text-body-secondary">Sep 28</span>
                    </div>
                  </div>
                </a>
                <div class="collapse" id="supportTicketThree">
                  <div class="card-body border-top line-clamp-2 text-body-secondary py-4 px-0 mx-4">
                    A user has requested a toggle for dark mode in the app settings. They would like a way to switch themes without having to rely on the
                    system’s default settings.
                  </div>
                </div>
              </div>
            </div>

            <!-- Header -->
            <div class="row align-items-center mb-5">
              <div class="col">
                <!-- Heading -->
                <h2 class="fs-5 mb-0">API usage limits</h2>
              </div>
            </div>

            <!-- Card -->
            <div class="card border-transparent bg-light">
              <span class="badge position-absolute bg-warning top-0 end-0 translate-middle-y me-n2">75% Used</span>
              <div class="card-body">
                <h2 class="fs-base mb-1">ChatGPT</h2>
                <p class="text-body-secondary">You're approaching your monthly limit.</p>
                <hr />
                <div class="row align-items-center">
                  <div class="col-auto">
                    <div class="avatar avatar-sm bg-white fs-lg text-primary"><i data-duoicon="alert-octagon"></i></div>
                  </div>
                  <div class="col ms-n3">25,000 / 30,000 calls used</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include ('system/inc/footer.php'); ?>
<script>
    $(document).ready(function() {

        // check user iddleness
        function is_idle() {
            var type = 'idle';

            $.ajax ({
                method : "POST",
                url : "<?= PROOT; ?>auth/idle.checker.php",
                data : { type : type},
                success : function (data) {
                    console.log(data);
                    if (data != '') {
                        window.location.href = "<?= PROOT; ?>auth/sign-in"
                    }
                }
            })
        }
        // setInterval(updateTime, 1000);

        setInterval(() => {
            // is_idle()
        }, 300000); // referesh after every 30sec

    });
</script>
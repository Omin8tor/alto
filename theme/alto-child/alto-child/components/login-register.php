<!-- Modal -->
<div
  class="modal fade"
  id="myLogin"
  tabindex="-1"
  aria-labelledby="myLoginLabel"
  aria-hidden="true"
>
  <div class="modal-dialog  modal-dialog-centered modal-m animate__animated animate__backInDown">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <!--Modal Body-->
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a> </li>
          <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a> </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php echo do_shortcode('[woocommerce_my_account]');?></div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php echo do_shortcode('[woocommerce_my_account]');?></div>
        </div>
      </div>
    </div>
  </div>
</div>
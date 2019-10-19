<div class="col-md-4">
  <div class="box box-solid box-primary">
    <div class="box-header">
      <h4 class="box-title"><b>Telegram Message <i class="fa fa-send"></i></b></h4>
    </div>

    <div class="box-body">
      <form method="post" action="sendMessage.php">
        <div class="form-group row">
          <label class="col-md-4 col-form-label">Telegram ID</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="telegram_id" placeholder="Telegram ID">
            </div>
        </div>
          <div class="form-group row">
            <label class="col-md-4 col-form-label">Messages</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="message_text" placeholder="Custom Text Message">
              </div>
          </div>
            <button type="submit" class="btn btn-primary">Send <i class="fa fa-send"></i></button>
      </form>
    </div>
  </div>
</div>




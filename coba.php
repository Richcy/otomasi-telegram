<div class="col-md-4">
  <div class="box box-solid box-primary">
    <div class="box-header">
      <h4 class="box-title"><b>Telegram Message <i class="fa fa-send"></i></b></h4>
    </div>

    <div class="box-body">
      <form method="post" action="sendMessage.php">
        <div class="form-group row">
          <label class="col-md-4 col-form-label">Chat ID Pelanggan</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="chat_id_pelanggan" placeholder="Chat ID">
            </div>
        </div>
          <div class="form-group row">
            <label class="col-md-4 col-form-label">Pesan</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="pesan" placeholder="Pesan Anda">
              </div>
          </div>
          
            <button type="submit" class="btn btn-primary">Send <i class="fa fa-send"></i></button>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">

    setTimeout(sendMessage,3000);
</script>



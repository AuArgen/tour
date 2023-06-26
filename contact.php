  <div class="body">
    <div class="containerContact">
      <div class="content">
        <div class="image-box">
          <img src="./img/contact.png" alt="" />
        </div>
        <form action="save.php" method="post">
          <div class="topic">Send us a message</div>
          <div class="input-box">
            <input type="text"  name="name" required />
            <label>Enter your name</label>
          </div>
          <div class="input-box">
            <input type="email" name="email" required />
            <label>Enter your email</label>
          </div>
          <div class="message-box">
            <textarea name="message"></textarea>
            <label>Enter your message</label>
          </div>
          <div class="input-box">
            <input type="submit" name="contact" value="Send Message" />
          </div>
        </form>
      </div>
    </div>
  </div>
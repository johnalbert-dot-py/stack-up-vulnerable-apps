<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <section id="message-app">
      <aside>
        Find a Student

        <div class="search-container">
          <input type="text" name="search" placeholder="Search student name here... ">
        </div>

        <div class="students" style="margin-top: 12px;">
        </div>

      </aside>

      <section id="convos">

        <div class="" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; border-bottom: 1px solid #000;  padding-block: 20px; padding-inline: 15px; font-size: 1.5rem; font-weight: bold">

          <div class="convo-with">

          </div>

          <div>
            <button onClick="showConvo()" style="background-color: #000; color: #fff; padding: 12px; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem">
              Start Convo
            </button>
          </div>


        </div>

        <div id="convo-history" class="convo-history" style=" padding: 20px">
          <!-- <div class="left">
            <span class="convo-with">
            </span>
            <span class="message">
              Bain bading
            </span>
          </div>
          <div class="right">
            <span class="sender">
              You
            </span>
            <span>
              Omsim taena non eh bading ampota
            </span>
          </div> -->
        </div>

        <form id="send" style="display: flex; flex-direction: row; gap: 8px; align-items: center; margin-top: auto; padding: 20px">
          <input type="hidden" name="receiver_id">
          <input style="height: 3rem" type="text" class="message-input" name="message" placeholder="Message Here ">
          <select name="sender" id="sender">
            <option value="you">You</option>
            <option value="student" class="convo-with"></option>
          </select>
          <button type="submit" class="send-btn">
            Send
          </button>
        </form>

      </section>

    </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script>
    function startConvo(el) {

      $("[name='receiver_id']").val(el.id);
      fetchMessage(el.id);
      $("#convos").show()
      $("#send").hide()
      $("#convo-history").hide()
      $(".convo-with").text($(el).data("name") + " - " + $(el).data("student-no"))

    }


    function fetchMessage(id) {
      $.ajax({
        url: "content/message.php",
        method: "GET",
        data: {
          receiver_id: id
        },
        success: function(data) {
          $(".convo-history").html(data);
        }
      });
    }

    function showConvo() {
      $("#send").show()
      $("#convo-history").show()

    }

    $(document).ready(function() {
      // get all data from search.php for now

      $("#convos").hide()
      $("#send").hide()
      $("#convo-history").hide()

      $.ajax({
        url: "content/search.php",

        method: "POST",
        success: function(data) {
          $(".students").html(data);
        }
      });

      $("input[name='search']").on("keyup", function() {
        var search = $(this).val();

        $.ajax({
          url: "content/search.php",
          method: "POST",
          data: {
            search: search
          },
          success: function(data) {
            $(".students").html(data);
          }
        });
      });

      $("#send").on("submit", (e) => {
        e.preventDefault();
        var message = $(".message-input").val();
        var receiver_id = $("[name='receiver_id']").val();
        var sender = $("#sender").val() ?? "you";

        $.ajax({
          url: "content/message.php",
          method: "POST",
          data: {
            message: message,
            receiver_id: receiver_id,
            sender: sender
          },
          success: function(data) {
            console.log(data)
            $(".message-input").val("");
            fetchMessage(receiver_id);
          }
        });
      })


    });
  </script>

</body>

</html>
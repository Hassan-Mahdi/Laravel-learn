
function sendData() {
    var myName = document.getElementById('myName').value;
    var myRoll = document.getElementById('myRoll').value;
    var myClass = document.getElementById('myClass').value;

    var url = "/insertData";
    var data = {name:myName, roll:myRoll, class:myClass};

    axios.post( url, data)
      .then(function (response) {
        alert(response.data);
      })
      .catch(function (error) {
        alert("Error");
      });

}


function DeleteData() {
    var myId = document.getElementById('myId').value;
    var url = "/deleteData";
    var data = {id:myId};

    axios.post(url, data)
      .then(function (response) {
        alert(response.data);
      })
      .catch(function (error) {
        alert("Error");
      });

}


function updateData() {
  var myName = document.getElementById('myName').value;
  var myRoll = document.getElementById('myRoll').value;
  var myClass = document.getElementById('myClass').value;
  var myId = document.getElementById('myId').value;

  var url = "/updateData";
  var data = {name:myName, roll:myRoll, class:myClass, id:myId};

  axios.post(url, data)
      .then(function (response) {
        alert(response.data);
      })
      .catch(function (error) {
        alert("Error");
      });


}

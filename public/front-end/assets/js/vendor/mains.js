showcase();
let addServiceInput = document.getElementById("service");
let addPriceInput = document.getElementById("price");
let addtaskbtn = document.getElementById("addtaskbtn");

addtaskbtn.addEventListener("click", function () {
  addPriceVal = addPriceInput.value;
  addServiceVal = addServiceInput.value;
  if (addServiceVal.trim() != 0) {
    let webtask = localStorage.getItem("localtask");
    if (webtask == null) {
      taskObj = [];
    } else {
      taskObj = JSON.parse(webtask);
    }
    taskObj.push({
     
      service: addServiceVal,
       price: addPriceVal

    });
    // console.log(taskObj, 'Ashendra');
    localStorage.setItem("localtask", JSON.stringify(taskObj));
    addServiceInput.value = "";
    addPriceInput.value=null;
  }
  showcase();
});

// showtask
function showcase() {
  let webtask = localStorage.getItem("localtask");
  if (webtask == null) {
    taskObj = [];
  } else {
    taskObj = JSON.parse(webtask);
  }
  let html = "";
  let addedtasklist = document.getElementById("addedtasklist");
  taskObj.forEach((item, index) => {
   
      taskCompleteValue = `<td>${item.service}</td><td>${item.price}</td>`;
      // <td><button type="button" onclick="deleteitem(${index})" class="text-danger"><i class="fa fa-trash"></i></button></td>
    html += `<tr>
                    <th scope="row">${index + 1}</th>
                    ${taskCompleteValue}
                 

                    <td><i class="fa fa-trash" onclick="deleteitem(${index})" style="cursor: pointer;" ></i></td>
                </tr>`;
  });
  addedtasklist.innerHTML = html;
}


function deleteitem(index) {
  let webtask = localStorage.getItem("localtask");
  let taskObj = JSON.parse(webtask);
  taskObj.splice(index, 1);
  localStorage.setItem("localtask", JSON.stringify(taskObj));
  showcase();
}






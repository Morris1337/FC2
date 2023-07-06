let mailBoxes = ["","","","","","",""]
function deliverMessage (boxNum, message) {
  if (mailBoxes[boxNum] != undefinded) {
    mailBoxes[boxNum] = message;
    console.log(mailBoxes);
  }
 }
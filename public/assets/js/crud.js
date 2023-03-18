var name, email, phone, address;

function readForm() {
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    phone = document.getElementById("phone").value;
    address = document.getElementById("address").value;
    console.log(name, email, phone, address);
}

document.getElementById("insert").onclick = function () {
    readForm();

    firebase
        .database()
        .ref("service/" + name)
        .set(
            {
                name: name,
                email: email,
                phone: phone,
                address: address,
            }
        );
    alert("Data Inserted");
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("address").value = "";
};

document.getElementById("read").onclick = function () {
    readForm();

    firebase
        .database()
        .ref("service/" + name)
        .on("value", function (snap) {
            document.getElementById("name").value = snap.val().name;
            document.getElementById("email").value = snap.val().email;
            document.getElementById("phone").value = snap.val().phone;
            document.getElementById("address").value = snap.val().address;
        });
};

document.getElementById("update").onclick = function () {
    readForm();

    firebase
        .database()
        .ref("service/" + name)
        .update({
            //name:name,
            email: email,
            phone: phone,
            address: address,
        });
    alert("Data Updated");
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("address").value = "";
};

document.getElementById("delete").onclick = function () {
    readForm();

    firebase
        .database()
        .ref("service/" + name)
        .remove();
    alert("Data Deleted");
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("address").value = "";
};
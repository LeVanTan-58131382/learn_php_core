import http from "k6/http";

export let options = {
    vus: 10, // người dùng ảo
    duration: "30s",
}

export default function()
{
    // VD3:
    // gửi dữ liệu lên server
    var url = "http://test.k6.io/login";
    var payload = JSON.stringify({
        email: "aaa",
        password: "bbb",
    });

    var params = {
        header: {
            "Content-Type" : "application/json",
        },
    };

    http.post(url, payload, params);
}
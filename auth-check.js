import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.0/firebase-app.js";
import { getAuth, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.7.0/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyB7JMjJWrc9891M4deOdyzwEV4FPv2ZPz0",
    authDomain: "findmtl.firebaseapp.com",
    projectId: "findmtl",
    storageBucket: "findmtl.firebasestorage.app",
    messagingSenderId: "421014588678",
    appId: "1:421014588678:web:e7b95a655cfcd05503e287"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

// The actual check
onAuthStateChanged(auth, (user) => {
    if (!user) {
        // If they are not logged in, send them to the root login page
        window.location.href = "/login.html"; 
    }
});
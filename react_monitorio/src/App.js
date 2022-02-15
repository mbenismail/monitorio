import Login from  "./components/app/Login/login";
import Register from  "./components/app/Register/register";
import EmailsForgot from  "./components/app/Emails_Forgot/emailsforgot";
import SideBar from  "./components/app/Sidebar/sidebar";
import Header from  "./components/app/Header/header";
import SideBar2 from  "./components/app/Sidebar/sidebar2";
import Footer from "./components/app/Footer/footer";
import './App.css';
import Home from './components/app/Home/home'
import Customizer from "./components/app/Customizer/customizer";
import React from 'react';
import User from './components/app/User/user';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Routes } from "react-router-dom"

function App() {
 
  return (
    <div className="app">
    
      <Router>
      <Header/>
      <SideBar/>
     <Customizer/>




        <Footer/>
      </Router>
    </div>
  );
}

export default App;
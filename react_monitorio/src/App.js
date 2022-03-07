import Login from  "./components/app/Login/login";
import Register from  "./components/app/Register/register";
import EmailsForgot from  "./components/app/Emails_Forgot/emailsforgot";
import SideBar from  "./components/app/Sidebar/sidebar";
import Header from  "./components/app/Header/header";
import CreateProfile from './components/app/Profile/CreateProfile';
import ListProfiles from './components/app/Profile/ListProfile';
import EditProfile from './components/app/Profile/EditProfile';
import Footer from "./components/app/Footer/footer";
import './App.css';
import { BrowserRouter } from 'react-router-dom';
import Home from './components/app/Home/home'
import Customizer from "./components/app/Customizer/customizer";

import React from 'react';
import Project from'./components/app/Project/project'
import User from './components/app/User/user';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Routes } from "react-router-dom"

function App() {
 
  return (
    <div className="app">
    
   
      <Header/>
      <SideBar/>
     <Customizer/>
     
   
    <BrowserRouter>
      <Switch>

          <Route path="/Create profile" component={CreateProfile}/>
          <Route path="/List profiles" component={ListProfiles}/>
          <Route path="/Edit profile" component={EditProfile}/>

          <Route path="/user" component={User}/>
          <Route path="/project" component={Project} />

          </Switch>

    </BrowserRouter>
   
        <Footer/>
    

    </div>
  );
}

export default App;
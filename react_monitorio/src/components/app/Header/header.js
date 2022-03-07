import React from 'react';

import './header.css';
function AppHeader() {
    
    return (
<div className="all-wrapper solid-bg-all">

 <div className="ws">
      <div className="top-bar color-scheme-light">
        <ul>
          <li >
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">Projects</a>
          </li>
          
          <li>
            <a href="#">Users</a>
          </li>
        </ul>
        <div className="top-menu-controls">
          <div className="element-search autosuggest-search-activator">
            <input placeholder="Start typing to search..." type="text" />
          </div>
          <div className="messages-notifications os-dropdown-trigger os-dropdown-position-left">
            <img alt src="assets/img/traduction.png" className="img"/>
            <div className="os-dropdown light message-list">
              <ul>
              <li>
                  <a href="#">
                    <div className="user-avatar-w">
                      <img alt src="assets/img/fr.png" />
                    </div>
                    <div className="message-content">
                      <h6 className="message-from">
                       Français
                      </h6>
                     
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div className="user-avatar-w">
                      <img alt src="assets/img/eng.png" />
                    </div>
                    <div className="message-content">
                      <h6 className="message-from">
                       Engish
                      </h6>
                     
                    </div>
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        
          <div className="logged-user-w">
            <div className="logged-user-i">
              <div className="avatar-w">
                <img alt src="assets/img/avatar1.jpg" />
              </div>
              <div className="logged-user-menu color-style-bright">
                <div className="logged-user-avatar-info">
                  <div className="avatar-w">
                    <img alt src="assets/img/avatar1.jpg" />
                  </div>
                  <div className="logged-user-info-w">
                    <div className="logged-user-name">
                      Maria Gomez
                    </div>
                    <div className="logged-user-role">
                      Administrator
                    </div>
                  </div>
                </div>
                <div className="bg-icon">
                  <i className="os-icon os-icon-wallet-loaded" />
                </div>
                <ul>
 
                  <li>
                    <a href=""><i className="os-icon os-icon-user-male-circle2" /><span>Profile Details</span></a>
                  </li>
                  <li>
                    <a href=""><i className="os-icon os-icon-coins-4" /><span>Profile Settings</span></a>
                  </li>
                  <li>
                    <a href="#"><i className="os-icon os-icon-others-43" /><span>Notifications</span></a>
                  </li>
                  <li>
                    <a href="#"><i className="os-icon os-icon-signs-11" /><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      );
}

export default AppHeader;
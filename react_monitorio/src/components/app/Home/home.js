import React from 'react';

function AppHome() {
    
    return (
        
        

        <div className="all-wrapper solid-bg-all">
<div>
  <h6 className="element-header">
     Dashboard
  </h6>
  <div className="element-content">
    <div className="row">
      <div className="col-sm-4 col-xxxl-3">
        <a className="element-box el-tablo" href="#">
          <div className="label">
            Products Sold
          </div>
          <div className="value">
            57
          </div>
          <div className="trending trending-up-basic">
            <span>12%</span><i className="os-icon os-icon-arrow-up2" />
          </div>
        </a>
      </div>
      <div className="col-sm-4 col-xxxl-3">
        <a className="element-box el-tablo" href="#">
          <div className="label">
            Gross Profit
          </div>
          <div className="value">
            $457
          </div>
          <div className="trending trending-down-basic">
            <span>12%</span><i className="os-icon os-icon-arrow-down" />
          </div>
        </a>
      </div>
      <div className="col-sm-4 col-xxxl-3">
        <a className="element-box el-tablo" href="#">
          <div className="label">
            New Customers
          </div>
          <div className="value">
            125
          </div>
          <div className="trending trending-down-basic">
            <span>9%</span><i className="os-icon os-icon-arrow-down" />
          </div>
        </a>
      </div>
      <div className="d-none d-xxxl-block col-xxxl-3">
        <a className="element-box el-tablo" href="#">
          <div className="label">
            Refunds Processed
          </div>
          <div className="value">
            $294
          </div>
          <div className="trending trending-up-basic">
            <span>12%</span><i className="os-icon os-icon-arrow-up2" />
          </div>
        </a>
      </div>
    </div>
  </div>
</div></div>

);
}

export default AppHome;
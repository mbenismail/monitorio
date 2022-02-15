
function AppCustomizer() {
    
    return (

    <div>
    <div className="floated-customizer-btn third-floated-btn">
    <div className="icon-w">
      <i className="os-icon os-icon-ui-46" />
    </div>
    <span>Customizer</span>
  </div>
  <div className="floated-customizer-panel">
    <div className="fcp-content">
      <div className="close-customizer-btn">
        <i className="os-icon os-icon-x" />
      </div>
      <div className="fcp-group">
        <div className="fcp-group-header">
          Menu Settings
        </div>
        <div className="fcp-group-contents">
          <div className="fcp-field">
            <label htmlFor>Menu Position</label><select className="menu-position-selector">
              <option value="left">
                Left
              </option>
              <option value="right">
                Right
              </option>
              <option value="top">
                Top
              </option>
            </select>
          </div>
          <div className="fcp-field">
            <label htmlFor>Menu Style</label><select className="menu-layout-selector">
              <option value="compact">
                Compact
              </option>
              <option value="full">
                Full
              </option>
              <option value="mini">
                Mini
              </option>
            </select>
          </div>
          <div className="fcp-field with-image-selector-w">
            <label htmlFor>With Image</label><select className="with-image-selector">
              <option value="yes">
                Yes
              </option>
              <option value="no">
                No
              </option>
            </select>
          </div>
          <div className="fcp-field">
            <label htmlFor>Menu Color</label>
            <div className="fcp-colors menu-color-selector">
              <div className="color-selector menu-color-selector color-bright selected" />
              <div className="color-selector menu-color-selector color-dark" />
              <div className="color-selector menu-color-selector color-light" />
              <div className="color-selector menu-color-selector color-transparent" />
            </div>
          </div>
        </div>
      </div>
      <div className="fcp-group">
        <div className="fcp-group-header">
          Sub Menu
        </div>
        <div className="fcp-group-contents">
          <div className="fcp-field">
            <label htmlFor>Sub Menu Style</label><select className="sub-menu-style-selector">
              <option value="flyout">
                Flyout
              </option>
              <option value="inside">
                Inside/Click
              </option>
              <option value="over">
                Over
              </option>
            </select>
          </div>
          <div className="fcp-field">
            <label htmlFor>Sub Menu Color</label>
            <div className="fcp-colors">
              <div className="color-selector sub-menu-color-selector color-bright selected" />
              <div className="color-selector sub-menu-color-selector color-dark" />
              <div className="color-selector sub-menu-color-selector color-light" />
            </div>
          </div>
        </div>
      </div>
      <div className="fcp-group">
        <div className="fcp-group-header">
          Other Settings
        </div>
        <div className="fcp-group-contents">
          <div className="fcp-field">
            <label htmlFor>Full Screen?</label><select className="full-screen-selector">
              <option value="yes">
                Yes
              </option>
              <option value="no">
                No
              </option>
            </select>
          </div>
          <div className="fcp-field">
            <label htmlFor>Show Top Bar</label><select className="top-bar-visibility-selector">
              <option value="yes">
                Yes
              </option>
              <option value="no">
                No
              </option>
            </select>
          </div>
          <div className="fcp-field">
            <label htmlFor>Above Menu?</label><select className="top-bar-above-menu-selector">
              <option value="yes">
                Yes
              </option>
              <option value="no">
                No
              </option></select>
          </div>
          <div className="fcp-field">
            <label htmlFor>Top Bar Color</label>
            <div className="fcp-colors">
              <div className="color-selector top-bar-color-selector color-bright selected" />
              <div className="color-selector top-bar-color-selector color-dark" />
              <div className="color-selector top-bar-color-selector color-light" />
              <div className="color-selector top-bar-color-selector color-transparent" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>     
  <div className="floated-colors-btn second-floated-btn">
    <div className="os-toggler-w">
      <div className="os-toggler-i">
        <div className="os-toggler-pill" />
      </div>
    </div>
    <span>Dark </span><span>Colors</span>
  </div>
 
  <div className="display-type" />
</div>

              );
}

export default AppCustomizer;
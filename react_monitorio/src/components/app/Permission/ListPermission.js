import { render } from "@testing-library/react";
import React ,{useState,useEffect} from 'react';
import { useHistory, useParams } from "react-router-dom";

function AppListPermission() {

  const [Permission,setPermission] = useState([]);
 
 
 
 const fetchData = async () => {
   const response = await fetch("http://localhost:8000/api/permission/index")
   const data = await response.json()
   //console.log(data)
   setPermission(data)
 }
 
 
 
 useEffect(() => {
   fetchData()
 }, [])
 
    
    
let history = useHistory();




render()
{
  return (


<div className="header-s">  
  <div className="all-wrapper with-side-panel solid-bg-all">
    
 <div className="col-sm-10">
  <div className="element-wrapper">
    <div className="element-box">
      <form id="formValidate" >
      
        

        <fieldset className="form-group">
        <div className="element-box">
  <legend><span>List of Permission</span></legend>

    

  <table id="editableTable" className="table table-editable table-striped table-lightfont">
  <thead><tr><th>Description</th><th>By default</th></tr></thead>
  <tbody>
{ Permission.map((permission)=>{

return(
    <tr key={permission.id}>
<td>{permission.CodePerm}</td>
  <td>  <img alt="" src="assets/img/no.png" width="15px"/> {permission.ParDefaut ? 'Yes' : 'No'}</td>
 
 
  </tr>
)})}

  
  </tbody></table>
</div>

</fieldset>
      

        <div className="form-buttons-w">
          <button className="btn btn-primary" type="submit"> Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div className="display-type" />
  </div>
</div>
  );
}}

export default AppListPermission;
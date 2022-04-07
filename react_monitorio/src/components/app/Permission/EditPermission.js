import { render } from "@testing-library/react";
import React ,{useState,useEffect} from 'react';
import { useHistory, useParams } from "react-router-dom";

function AppEditPermission() {

 //const url ="http://localhost:8000/api/permission/edit/{id}"
 const [PermissionId, setPermissionId]= useState('');
  const [CodePerm,setCodePerm] = useState('');
  const [DescPerm,setDescPerm] = useState('');
  const [DateCreat,setDateCreat] = useState('');
  //const [id,setId] = useState('');

  const [message, setMessage] = useState("");
  
     
  useEffect(() => {
    // PUT request using fetch inside useEffect React hook
    const requestOptions = {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ CodePerm, DescPerm, DateCreat })
    };
    fetch(`http://localhost:8000/api/permission/edit/`, requestOptions)
        .then(response => response.json())
        .then(data => setPermissionId(data.id));

}, []);

    
    //   const onHandleSubmit = async (e) => {
    //     e.preventDefault();{
    
    //   //  await fetch(
    //   //     'http://localhost:5000/api/permission/edit/' + id,
          
    //   //     JSON.stringify({ CodePerm, DescPerm, DateCreat}),
    //   //     {
    //   //       method: "PUT",
    //   //       'Content-Type': 'application/json',
    //   //     }
    //   //   )
    //   //     .then((res) => {
    //   //       console.log(res)
    //   //       //toast.success('updated')
    //   //      // history.push('/' + role + 's')
    //   //     })
    //   //     .catch((err) => console.log(err.message))
      
    //   const requestOptions = {
    //     method: 'PUT',
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ 
    //      PermissionId:PermissionId,
    //       CodePerm: CodePerm,
    //       DescPerm: DescPerm,
    //       DateCreat:DateCreat,
    //      })
    // };
    // async function edit (id){
    // await fetch('http://localhost:8000/api/permission/edit/', id ,requestOptions)
    //     .then(response => response.json())
    //     .then(
    //     data => setCodePerm(data.CodePerm),
    //     data => setDescPerm(data.DescPerm),
    //     );

    //         }      }}
    
    
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
      <legend><span>Edit Permission </span></legend>
        
        <div className="row">
          <div className="col-sm-4">
        <div className="form-group">
          <label htmlFor> Code permission </label><input value={CodePerm}
                onChange={(e) => setCodePerm(e.target.value)} className="form-control" data-error="Your code permission  is invalid" 
          placeholder="Enter code permission" required="required" type="text" />
          <div className="help-block form-text with-errors form-control-feedback" />
        </div>
        </div>
        <div className="col-sm-4">
        <div className="form-group">
          <label htmlFor> Description</label><input value={DescPerm}
                onChange={(e) => setDescPerm(e.target.value)}className="form-control" data-error="Your Description is invalid" placeholder="Enter Description" required="required" type="text" />
          <div className="help-block form-text with-errors form-control-feedback" />
        </div>
        </div>
        </div>
        <div className="row">
          <div className="col-sm-4">
            <div className="form-group">
              <label htmlFor> Created by	</label><input  className="form-control" data-minlength={6} placeholder="" required="required" type="text" />
              <div className="help-block form-text text-muted form-control-feedback">
              </div>
            </div>
          </div>
          <div className="col-sm-4">
            <div className="form-group">
              <label htmlFor>Created on	</label><input value={DateCreat}
                onChange={(e) => setDateCreat(e.target.value)} className="form-control" data-match-error="" placeholder="" required="required" type="date" />
              <div className="help-block form-text with-errors form-control-feedback" />
            </div>
          </div>
        </div> 
        
        
       
        <fieldset className="form-group">
          <legend><span>Add permission to profile</span></legend>
          <div className="row">
          <div className="col-sm-4">

          <div className="form-group">
          <label htmlFor> Profile</label><select className="form-control">
            <option value="New York">
              New York
            </option>
            <option value="California">
              California
            </option>
            <option value="Boston">
              Boston
            </option>
            <option value="Texas">
              Texas
            </option>
            <option value="Colorado">
              Colorado
            </option>
          </select>
        </div>
        </div>
   

        <div className="form-buttons-w">
          <button className="btn btn-primary" type="submit"> Submit</button>
        </div>
        </div>
      
         
        
        </fieldset>
        <fieldset className="form-group">
        <div className="element-box">
  <legend><span>Profiles associated with this permission </span></legend>

    

  <table id="editableTable" className="table table-editable table-striped table-lightfont">
  <thead><tr><th>Profile</th><th>Description</th><th>Action</th></tr></thead>
  <tbody><tr>
<td> </td>
  <td></td>
  <td></td>
  <td></td>
 
  </tr>
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

export default AppEditPermission;
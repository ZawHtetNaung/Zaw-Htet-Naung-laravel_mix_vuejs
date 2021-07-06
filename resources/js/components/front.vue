<template>
  <div class="container-fluid" id="grad1" :class="{'loading': loading}">
                <div class="row justify-content-center mt-0">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Student Register</h2> 
                                    
                                        
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Subjects</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                        
                                        
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Students</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected> Choose Student</option>
                                              <option value="" v-for="student in students">
                                                  {{student.name}}
                                              </option>
                                        
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Student</th>
                                            <th scope="col">Subject</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="subject in subjects">
                                            <td>{{subject.student_id}}</td>
                                            <td>{{subject.name}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div> 
                                
                            </fieldset>
                        </div>
                    </div>
                </div>
    </div>
    </template>
    <script>
        export default {
            data: function() {
                return {
                    students: [],
                    subjects: [],
                    loading: true
                }
            },

            mounted() {
                this.loadStudents();
                this.loadSubjects();

            },

            methods: {
                loadStudents: function() {
                    //load API
                    axios.get('/api/students')
                    //addign this.students
                    .then((response) => {
                        this.students = response.data.data;
                    })
                    //catch errors
                    .catch(function (error){
                        console.log(error);
                    });
                    
                    

                },

                loadSubjects: function() {
                     axios.get('/api/subjects')
                      .then((response) => {
                        this.subjects = response.data.data;
                        this.loading = false;
                    })
                    .catch(function (error){
                        console.log(error);
                    });

                }
            }
        }
    </script>
    
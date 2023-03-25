import axios from "axios";

/*
    This file was made so it's easier for the developers to create new api calls
    Once we create a new function we just need to import the class into the component and
    call for the function.

    By doing that we keep the components clean and there is no need to import libs (axios,etc...) and call for an endpoint
    everytime we create a new component

    The process.env.VUE_APP_* variables contain the API url and ENDPOINTS, check the .env file,
    this is because it is good practices to not keep hardcoded links in the application
*/

// main_endpoint = .env values for API
const main_endpoint = process.env.VUE_APP_API_HOST+process.env.VUE_APP_API_ENDPOINT;

export default class API_REQUEST {

    //Returns all tasks
    async getTasks() {
        let tasks;
        await axios.get(main_endpoint)
        .then((response) => {
            tasks = response.data.data;
        })
        return tasks;
    }

    //Returns a specific task
    async getSingleTask(id) {
        let task;
        await axios.get(main_endpoint+'/'+id)
        .then((response) => {
            task = response.data.data;
        })
        return task;
    }

    //Creates a new task
    async createTask(name, description, deadline=null, done=0) {
        await axios.post(main_endpoint, {name: name, description: description, deadline: deadline, done: done});
    }

    //Sets a task to Done
    async doneTask(id, done=1, deadline=0) {
        await axios.put(main_endpoint+'/'+id, {done: done, deadline: deadline});
    }

    //Deletes a task
    async deleteTask(id) {
        await axios.delete(main_endpoint+'/'+id);
    }

    //Update a task
    async updateTask(id, name, description, deadline) {
        await axios.put(main_endpoint+'/'+id, {name: name, description: description, deadline: deadline});
    }
}


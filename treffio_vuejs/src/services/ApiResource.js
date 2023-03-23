import axios from "axios"

export default class API_COM {

    GetTasks() {
        axios.get('http://127.0.0.1/api/v1/tasks')
        .then(response => {
            return response.data
        })
    }
}
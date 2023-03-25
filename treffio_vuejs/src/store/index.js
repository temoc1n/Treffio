import { createStore } from 'vuex'

/* Screen lock when menu is up -> 
index: sets the z-index to -1; 
getIndex(): is used to read the value inside the components; 
lockScreen() and unlockScreen(): are function to switch between locked and unlocked (z-index: -1, z-index:1)
*/

export default createStore({
  state: {
    index_lock: "z-index: 1",
    taskID: 0
  },
  getters: {
    getIndex(state) {
      return state.index_lock;
    },
    getTask(state) {
      return state.taskID;
    }
  },
  mutations: {
    lockScreen(state) {
      return state.index_lock = "z-index: -1"   //Set the z-index to -1
    },
    unlockScreen(state) {
      return state.index_lock = "z-index: 1"  //Set the z-index to 1
    },
    updateTask(state, task_id) {
      return state.taskID = task_id     //Returns the id of a task
    }
  },
  actions: {
  },
  modules: {
  }
})

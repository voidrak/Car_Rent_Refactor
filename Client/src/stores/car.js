import { defineStore } from "pinia";
import router from "@/router";
export const useCarStore = defineStore("carStore", {
  state: () => {
    return {
      errors: {},
    };
  },

  actions: {
    /*********************  Get All Cars ********************** */

    async getAllCars() {
      const res = await fetch("/api/cars", {
        method: "GET",
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
          "Content-Type": "application/json"
        },
      });
      const data = await res.json();

      return data;
    },
    /*********************  Get Available Cars ********************** */

    async getAvailableCars() {
      const res = await fetch("/api/available-cars/", {
        method: "GET",
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
          "Content-Type": "application/json"
        },
      });
      const data = await res.json();

      return data;
    },
    /*********************  Get A Car ********************** */

    async getCar(car) {
      const res = await fetch(`/api/cars/${car}`, {
        method: "GET",
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
          "Content-Type": "application/json"
        },
      });
      const data = await res.json();
      // console.log(data);
      return data;
    },

    /*********************  Create Car ********************** */

    async createCar(formData) {
      for (let pair of formData.entries()) {
        console.log(pair[0] + ':', pair[1]);
      }
      const res = await fetch("/api/cars", {
        method: "POST",
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
        },

        body: formData, 
      });

      const data = await res.json();

      if (data.errors) {
        this.errors = data.errors;
      } else {
        console.log("Successfully Created");
        this.errors = {};
        router.push({ name: "ManagerCars" });
      }
    },

    /*********************  Edit Car ********************** */

    async updateCar(car, formdata) {
      const res = await fetch(`/api/cars/${car}`, {
        method: 'PUT',
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
        },
        body: formdata
      })

      const data = await res.json();
      if (data.errors) {
        this.errors = data.errors
      } else {
        this.errors = {}
        this.router.push({ name: 'adminHome' })

      }

    },


    /*********************  Delete Car ********************** */

    async deleteCar(car) {

      const res = await fetch(`/api/cars/${car}`, {
        method: 'DELETE',
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
          "Content-Type": "application/json"
        }
      })

      const data = await res.json();
      if (data.errors) {
        this.errors = data.errors
      } else {
        this.errors = {}
        this.router.push({ name: 'adminHome' })
      }

    },

  },

});

import { defineStore } from "pinia";
import router from "@/router";
export const useReservationStore = defineStore("reservationStore", {
  state: () => {
    return {
      errors: {},
    };
  },

  actions: {
    /*********************  Get All Reservations ********************** */

    async getAllReservations() {
      const res = await fetch("/api/reservations", {
        method: "GET",
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
          "Content-Type": "application/json"
        },
      });
      const data = await res.json();

      return data;
    },
    /*********************  Get A Reservation ********************** */

    async getReservation(reservation) {
      const res = await fetch(`/api/reservations/${reservation}`, {
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

    /*********************  Create Reservation ********************** */

    async createReservation(formData) {
      const res = await fetch("/api/reservations", {
        method: "POST",
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
          "Content-Type": "application/json"

        },

        body: JSON.stringify(formData),
      });

      const data = await res.json();

      if (data.errors) {
        this.errors = data.errors;
      } else {
        this.errors = {};
        this.router.push({ name: "adminHome" });
      }
    },

    /*********************  Edit Reservation ********************** */

    async updateReservation(reservation, formdata) {
      const res = await fetch(`/api/reservations/${reservation}`, {
        method: 'PUT',
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
          "Content-Type": "application/json"

        },
        body: JSON.stringify(formdata),
      })

      const data = await res.json();
      if (data.errors) {
        this.errors = data.errors
      } else {
        this.errors = {}
        this.router.push({ name: 'adminHome' })

      }

    },


    /*********************  Delete Reservation ********************** */

    async deleteReservation(reservation) {

      const res = await fetch(`/api/reservations/${reservation}`, {
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

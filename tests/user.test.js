const axios = require("axios");

describe("User", () => {
    it("should get all users", async () => {
        const response = await axios.get("http://localhost:3000/users");
        expect(response.data).toBeInstanceOf(Array);
    });

    it('should get user by id', async () => {
        const id = "05feb5b5-5abd-40eb-af41-09720c2ffce3";
        const response = await axios.get(`http://localhost:3000/users/${id}`);
        expect(response.data).toBeInstanceOf(Object);
    });

    it('should create user', async () => {
        const response = await axios.post("http://localhost:3000/users", {
            name: "test",
            email: "test@test.com",
            age: 20
        });
        expect(response.data).toBeInstanceOf(Object);
    });

    const id = '45a90922-4817-4ff9-8590-44f349ba7b2d';

    it('should delete user', async () => {
        const response = await axios.delete(`http://localhost:3000/users/${id}`);
        expect(response.data).toBeInstanceOf(Object);
    })

    it('should update user', async () => {
        const response = await axios.put(`http://localhost:3000/users/${id}`, {
            name: "test 1",
            email: "test@admin.gi.com",
            age: 10
        });
        expect(response.data).toBeInstanceOf(Object);
    })
});

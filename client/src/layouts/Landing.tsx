import React from "react";
import { Outlet } from "react-router-dom";

import Main from "../components/Main";

const Landing: React.FunctionComponent = ({ children }) => (
	<Main className="">
		{children}
		<Outlet />
	</Main>
);

export default Landing;

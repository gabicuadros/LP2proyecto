require 'httparty'
class LaborsocialController < ApplicationController
    include HTTParty
  
    def index
        @datos = HTTParty.get "http://localhost:8000/api/laborsocial"
    end

    def show
        @datos = HTTParty.get "http://localhost:8000/api/laborsocial/" + params.require(:id)
    end

    def new
        
    end

    def create
        
    end

    def edit
        @datos = HTTParty.get "http://localhost:8000/api/laborsocial/" + params.require(:id)
    end

    def redirect_cancel
        redirect_to laborsocial_index_path if params[:cancel]
    end

end
